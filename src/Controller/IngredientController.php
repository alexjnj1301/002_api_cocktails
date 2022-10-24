<?php

namespace App\Controller;

use App\Entity\Ingredient;
use App\Repository\IngredientRepository;
use App\Repository\RecetteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class IngredientController extends AbstractController
{
    #[Route('/ingredient', name: 'app_ingredient')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/IngredientController.php',
        ]);
    }

    // GET : Retourner tous les ingrédients
    /**
     * Retourne la liste des ingrédients paginés
     *
     * @param IngredientRepository $repository
     * @param SerializerInterface $serializer
     * @param Request $request
     * @return JsonResponse
     */
    #[Route('/api/ingredients', name : 'ingredients.getAll', methods: ['GET'])]
    /**
     * Retourne un ingrédient à partir de son id
     *
     * @param IngredientRepository $repository
     * @param SerializerInterface $serializer
     * @param Request $request
     * @return JsonResponse
     */
    public function getAllIngredients(IngredientRepository $repository, SerializerInterface $serializer, Request $request) : JsonResponse
    {
        $page =  $request->get('page', 1);
        $limit = $request->get('limit', 50);
        $limit = $limit > 20 ? 20: $limit;
        //$status = $request->get('status', 'on');
        //$ingredients = $repository->findWithStatus($status);
        $ingredients = $repository->findWithPagination($page, $limit);
        $jsonIngredients = $serializer->serialize($ingredients, 'json', ['groups' => 'getAllIngredients']);
        return new JsonResponse($jsonIngredients, 200, [], true);
    }

    // GET : Retourner un ingrédient
    #[Route('/api/ingredient/{idIngredient}', name : 'ingredient.get', methods: ['GET'])]
    #[ParamConverter("Ingredient", options : ["id" => "idIngredient"])]
    public function getIngredients(Ingredient $Ingredient, SerializerInterface $serializer) : JsonResponse
    {
        $jsonIngredient = $serializer->serialize($Ingredient, 'json', ['groups' => 'getIngredient']);
        return new JsonResponse($jsonIngredient, Response::HTTP_OK, ['accept' => 'json'], true);
    }

    // DELETE : Supprimer un ingrédient
    #[Route('/api/ingredient/{idIngredient}', name : 'ingredient.delete', methods: ['DELETE'])]
    #[ParamConverter("Ingredient", options : ["id" => "idIngredient"])]
    public function deleteIngredient(Ingredient $Ingredient, EntityManagerInterface $entityManager) : JsonResponse
    {
        $entityManager->remove($Ingredient);
        $entityManager->flush();
        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }

    // POST : Ajouter un ingrédient
    #[Route('/api/ingredient', name : 'ingredient.create', methods: ['POST'])]
    public function createIngredient(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializer, 
    RecetteRepository $RecetteRepository, UrlGeneratorInterface $urlGenerator, ValidatorInterface $validator) : JsonResponse
    {
        $ingredient = $serializer->deserialize($request->getContent(), Ingredient::class, 'json');
        $ingredient->setStatus("on");
        $content = $request->toArray();
        $idRecette = $content["idRecette"];
        $ingredient->addIngredientRecette($RecetteRepository->find($idRecette));
        $errors = $validator->validate($ingredient);
        if($errors->count() > 0)
        {
            return new JsonResponse($serializer->serialize($errors, 'json'), JsonResponse::HTTP_BAD_REQUEST, [], true);
        }
        $entityManager->persist($ingredient);
        $entityManager->flush();
        $location = $urlGenerator->generate("ingredient.get", ['idIngredient' => $ingredient->getId()], 
        UrlGeneratorInterface::ABSOLUTE_URL);


        $jsonIngredient = $serializer->serialize($ingredient, 'json', ['groups' => 'getIngredient']);
        return new JsonResponse($jsonIngredient, Response::HTTP_CREATED, ["Location" => $location], true);
    }

    // PUT : Modifier un ingrédient
    // test commit 3
    #[Route('/api/ingredients/{id}', name: 'ingredient.update', methods: ['PUT'])]
    public function updateIngredient(
        Ingredient $ingredient,
        Request $request,
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        RecetteRepository $recetteRepository,
        UrlGeneratorInterface $urlGenerator
    ) : JsonResponse
    {
        $ingredient = $serializer->deserialize(
            $request->getContent(), 
            Ingredient::class, 
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $ingredient]
        );
        $ingredient->setStatus('on');

        $content = $request->toArray();
        $idRecette = $content['idRecette'];

        $ingredient->addIngredientRecette($recetteRepository->find($idRecette));        

        $entityManager->persist($ingredient);
        $entityManager->flush();
        
        $location = $urlGenerator->generate("ingredient.get", ['idIngredient' => $ingredient->getId()], UrlGeneratorInterface::ABSOLUTE_URL);
        $jsonIngredient = $serializer->serialize($ingredient, "json", ["groups" => 'getIngredient']);
        return new JsonResponse($jsonIngredient, Response::HTTP_CREATED, ["Location" => $location], true);
    }
}

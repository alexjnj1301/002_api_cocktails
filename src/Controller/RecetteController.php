<?php

namespace App\Controller;


use App\Entity\Recette;
use App\Repository\RecetteRepository;
use App\Repository\IngredientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\MakerBundle\Validator;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RecetteController extends AbstractController
{
    #[Route('/recette', name: 'app_recette')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/RecetteController.php',
        ]);
    }

    // GET : Retourner toutes les recettes
    #[Route('/api/recettes', name : 'recettes.getAll', methods: ['GET'])]
    public function getAllRecettes(RecetteRepository $repository, SerializerInterface $serializer) : JsonResponse
    {
        $recettes = $repository->findAll();
        $jsonRecettes = $serializer->serialize($recettes, 'json', ['groups' => 'getAllRecettes']);
        return new JsonResponse($jsonRecettes, 200, [], true);
    }

    // GET : Retourner une recette
    #[Route('/api/recette/{idRecette}', name : 'recette.get', methods: ['GET'])]
    #[ParamConverter("recette", options : ["id" => "idRecette"])]
    public function getRecette(Recette $recette, SerializerInterface $serializer) : JsonResponse
    {
        $jsonRecette = $serializer->serialize($recette, 'json', ['groups' => 'getRecette']);
        return new JsonResponse($jsonRecette, Response::HTTP_OK, ['accept' => 'json'], true);
    }

    // DELETE : Supprimer une recette
    #[Route('/api/recette/{idRecette}', name : 'recette.delete', methods: ['DELETE'])]
    #[ParamConverter("recette", options : ["id" => "idRecette"])]
    public function deleteRecette(Recette $recette, EntityManagerInterface $entityManager) : JsonResponse
    {
        $entityManager->remove($recette);
        $entityManager->flush();
        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }

    // POST : Ajouter une recette
    #[Route('/api/recette', name : 'recette.create', methods: ['POST'])]
    public function createRecette(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializer, 
    IngredientRepository $IngredientRepository, UrlGeneratorInterface $urlGenerator, ValidatorInterface $validator) : JsonResponse
    {
        $recette = $serializer->deserialize($request->getContent(), Recette::class, 'json');
        $recette->setStatus("on");
        $content = $request->toArray();
        $idIngredient = $content["idIngredient"];
        $recette->addRecetteIngredient($IngredientRepository->find($idIngredient));

        $errors = $validator->Validate($recette);
        if($errors->count() > 0)
        {
            return new JsonResponse($serializer->serialize($errors, 'json'), JsonResponse::HTTP_BAD_REQUEST, [], true);
        }
        $entityManager->persist($recette);
        $entityManager->flush();
        $location = $urlGenerator->generate("recette.get", ['idRecette' => $recette->getId()], 
        UrlGeneratorInterface::ABSOLUTE_URL);
    
    
        $jsonRecette = $serializer->serialize($recette, 'json', ['groups' => 'getRecette']);
        return new JsonResponse($jsonRecette, Response::HTTP_CREATED, ["Location" => $location], true);
    }

    // PUT : Modifier une recette
    #[Route('/api/recette/{id}', name: 'recette.update', methods: ['PUT'])]
    public function updateRecette(
        Recette $recette,
        Request $request,
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        IngredientRepository $ingredientRepository,
        UrlGeneratorInterface $urlGenerator
    ) : JsonResponse
    {
        $recette = $serializer->deserialize(
            $request->getContent(), 
            Recette::class, 
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $recette]
        );
        $recette->setStatus('on');
    
        $content = $request->toArray();
        $idIngredient = $content['idIngredient'];
    
        $recette->addRecetteIngredient($ingredientRepository->find($idIngredient));        
    
        $entityManager->persist($recette);
        $entityManager->flush();
            
        $location = $urlGenerator->generate("recette.get", ['idRecette' => $recette->getId()], UrlGeneratorInterface::ABSOLUTE_URL);
        $jsonRecette = $serializer->serialize($recette, "json", ["groups" => 'getRecette']);
        return new JsonResponse($jsonRecette, Response::HTTP_CREATED, ["Location" => $location], true);
    }
}

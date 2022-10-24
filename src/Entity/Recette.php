<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: RecetteRepository::class)]
class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Une recette doit avoir une quantité")]
    #[Assert\NotNull()]
    #[Assert\Length(min: 4, minMessage: "Une recette doit contenir au moins {{ Limit }} caractères")]
    #[Groups(["getAllRecettes","getRecette","getAllIngredients","getIngredient"])]
    private ?string $recetteName = null;

    #[ORM\ManyToMany(targetEntity: Ingredient::class, inversedBy: 'ingredientRecette')]
    #[Groups(["getAllRecettes","getRecette"])]
    private Collection $recetteIngredient;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Une recette doit avoir un statut")]
    #[Assert\NotNull()]
    #[Assert\Choice(
        choices: ['on', 'off'],
        message: "ON ou OFF")]
    private ?string $status = null;

    public function __construct()
    {
        $this->recetteIngredient = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecetteName(): ?string
    {
        return $this->recetteName;
    }

    public function setRecetteName(string $recetteName): self
    {
        $this->recetteName = $recetteName;

        return $this;
    }

    /**
     * @return Collection<int, Ingredient>
     */
    public function getRecetteIngredient(): Collection
    {
        return $this->recetteIngredient;
    }

    public function addRecetteIngredient(Ingredient $recetteIngredient): self
    {
        if (!$this->recetteIngredient->contains($recetteIngredient)) {
            $this->recetteIngredient->add($recetteIngredient);
        }

        return $this;
    }

    public function removeRecetteIngredient(Ingredient $recetteIngredient): self
    {
        $this->recetteIngredient->removeElement($recetteIngredient);

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}

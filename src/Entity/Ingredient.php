<?php

namespace App\Entity;

use App\Repository\IngredientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: IngredientRepository::class)]
class Ingredient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Un ingredient doit avoir un nom")]
    #[Assert\NotNull()]
    #[Assert\Length(min: 3, minMessage: "Un nom d'ingrédient doit contenir au moins {{ Limit }} caractères")]
    #[Groups(["getIngredient","getAllIngredients","getAllRecettes","getRecette"])]
    private ?string $ingredientName = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Un ingredient doit avoir un statut")]
    #[Assert\NotNull()]
    #[Assert\Choice(
        choices: ['on', 'off'],
        message: "ON ou OFF")]
    #[Groups(["getIngredient","getAllIngredients","getAllRecettes","getRecette"])]
    private ?string $status = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Un ingredient doit avoir une quantité")]
    #[Assert\NotNull()]
    #[Assert\Length(min: 1, minMessage: "Une quanité d'ingrédient doit contenir au moins {{ Limit }} caractères")]
    #[Groups(["getIngredient","getAllIngredients"])]
    private ?float $ingredientQuantite = null;

    #[ORM\ManyToMany(targetEntity: Recette::class, mappedBy: 'recetteIngredient')]
    #[Groups(["getIngredient","getAllIngredients"])]
    private Collection $ingredientRecette;

    public function __construct()
    {
        $this->ingredientRecette = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIngredientName(): ?string
    {
        return $this->ingredientName;
    }

    public function setIngredientName(string $ingredientName): self
    {
        $this->ingredientName = $ingredientName;

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

    public function getIngredientQuantite(): ?float
    {
        return $this->ingredientQuantite;
    }

    public function setIngredientQuantite(float $ingredientQuantite): self
    {
        $this->ingredientQuantite = $ingredientQuantite;

        return $this;
    }

    /**
     * @return Collection<int, Recette>
     */
    public function getIngredientRecette(): Collection
    {
        return $this->ingredientRecette;
    }

    public function addIngredientRecette(Recette $ingredientRecette): self
    {
        if (!$this->ingredientRecette->contains($ingredientRecette)) {
            $this->ingredientRecette->add($ingredientRecette);
            $ingredientRecette->addRecetteIngredient($this);
        }

        return $this;
    }

    public function removeIngredientRecette(Recette $ingredientRecette): self
    {
        if ($this->ingredientRecette->removeElement($ingredientRecette)) {
            $ingredientRecette->removeRecetteIngredient($this);
        }

        return $this;
    }
}

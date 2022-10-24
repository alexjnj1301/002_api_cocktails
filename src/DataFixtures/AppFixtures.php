<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Ingredient;
use App\Entity\Recette;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{
    /**
     * @var Generator
     */
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create("fr_FR");
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $listeIngredient = [];
        for($i=0;$i<20;$i++)
        {
            $ingredient = new Ingredient();
            $ingredient->setIngredientName($this->faker->word());
            $ingredient->setIngredientQuantite($this->faker->randomDigit());
            $ingredient->setStatus("on");
            $listeIngredient[] = $ingredient;
            $manager->persist($ingredient);
        }
        for($i=0;$i<5;$i++)
        {
            $recette = new Recette();
            $recette->setRecetteName($this->faker->word());
            $recette->setStatus("on");
            $recette->addRecetteIngredient($listeIngredient[array_rand($listeIngredient)]);
            $manager->persist($recette);
        }
        $manager->flush();
    }
}

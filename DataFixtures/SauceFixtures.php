<?php

namespace App\DataFixtures;

use App\Entity\Sauce;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SauceFixtures extends Fixture{
    public function load(ObjectManager $manager): void{
        $nomsSauces = [
            'Blanche',
            'Mayonnaise',
            'Ketchup',
            'Barbecue',
            "Biggy",
            "Andalouse"
        ];

        foreach($nomsSauces as $key => $nomSauce){
            $sauce = new Sauce();
            $sauce->setNom($nomSauce);
        }
    }
}
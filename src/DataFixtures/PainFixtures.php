<?php

namespace App\DataFixtures;

use App\Entity\Pain;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PainFixtures extends Fixture{

    private const PAIN_REFERENCE = 'Pain';

    public function load(ObjectManager $manager){
        $nomsPains = [
            'Pain aux céréales',
            'Pain complet'
        ];

        foreach($nomsPains as $key => $nomPain){
            $pain = new Pain();
            $pain->setName($nomPain);
            $manager->persist($pain);
            $this->addReference(self::PAIN_REFERENCE . '_'. $key, $pain);
        }

        $manager->flush();
    }
}
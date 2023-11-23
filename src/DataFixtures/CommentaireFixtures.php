<?php

namespace App\DataFixtures;

use App\Entity\Commentaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommentaireFixtures extends Fixture{

    private const COMMENTAIRE_REFERENCE = 'Commentaire';

    public function load(ObjectManager $manager): void{
        $contenuCommentaires = [
            'Délicieux burger !',
            "J'ai demandé sans cornichons mais il y en avait :(",
            'eurk',
        ];

        foreach($contenuCommentaires as $key => $contenuCommentaire){
            $commentaire = new Commentaire();
            $commentaire->setCommentaire($contenuCommentaire);
            $manager->persist($commentaire);
            $this->addReference(self::COMMENTAIRE_REFERENCE . '_' . $key, $commentaire);
        }

        $manager->flush();
    }
}
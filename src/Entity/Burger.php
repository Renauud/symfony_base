<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BurgerRepository::class)]
class Burger{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $name = null;

    #[ORM\OneToOne(cascade:["persist", "remove"])]
    private ?Image $image = null;

    #[ORM\OneToOne(cascade:["persist","remove"])]
    private ?Pain $pain = null;

    #[ORM\OneToMany(targetEntity:Sauce::class, mappedBy:"burger")] // ?
    private ?Sauce $sauce = null;

    #[ORM\OneToMany(targetEntity:Oignong::class, mappedBy:"burger")]
    private ?Oignon $oignon = null;

    #[ORM\OneToOne(cascade:["persiste","remove"])]
    private ?Commentaire $commentaire = null;
}
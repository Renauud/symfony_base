<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Commentaire{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $commentaire = null;

    // #[ORM\OneToOne(targetEntity:Burger::class, inversedBy:"commentaire")]
    // private ?Burger $burger = null;
}
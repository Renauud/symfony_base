<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Oignon{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $name = null;

    #[ORM\ManyToOne(targetEntity: Burger::class, inversedBy:"oignon")]
    private ?Burger $burger = null;
}
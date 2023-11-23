<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]

class Oignon{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $name = null;

    #[ORM\ManyToOne(targetEntity: Burger::class, inversedBy:"oignon")]
    private ?Burger $burger = null;

    public function getId(): int{
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }

    public function getName(): string{
        return $this->name;
    }
    public function setName(string $name){
        $this->name = $name;
    }
}
<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class Sauce
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length:255)]
    private ?string $nom = null;

    #[ORM\ManyToOne(targetEntity: Burger::class, inversedBy:"sauce")] // ?
    private ?Burger $burger = null;

    public function getId(): int{
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }
<<<<<<< HEAD
    public function getName(): ?string{
        return $this->nom;
    }
    public function setName(?string $nom){
=======
    public function getNom(): string{
        return $this->nom;
    }
    public function setNom(string $nom){
>>>>>>> 2437df8dc7ec688f470f8468d763a91daa21b088
        $this->nom = $nom;
    }
}
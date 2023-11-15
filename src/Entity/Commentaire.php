<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]

class Commentaire{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $commentaire = null;

    // #[ORM\OneToOne(targetEntity:Burger::class, inversedBy:"commentaire")]
    // private ?Burger $burger = null;

    public function getId(): ?int{
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }
    public function getCommentaire(): ?string{
        return $this->commentaire;
    }
    public function setCommentaire(?string $commentaire){
        $this->commentaire = $commentaire;
    }
}
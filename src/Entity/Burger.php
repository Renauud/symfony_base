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

    #[ORM\OneToMany(targetEntity:Oignon::class, mappedBy:"burger")]
    private ?Oignon $oignon = null;

    #[ORM\OneToOne(cascade:["persist","remove"])]
    private ?Commentaire $commentaire = null;

    public function getId(): int{
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }
    public function getName(): string{
        return $this->name;
    }
    public function setName(string $name): void{
    $this->name = $name;
    }
    public function getImage(): Image  {
        return $this->image;
    }
    public function setImage(Image $image): void{
        $this->image = $image;
    }
}
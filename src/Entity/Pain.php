<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Pain{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $name = null;
}
<?php

namespace App\Controller\Commentaire;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentaireController extends AbstractController{

    #[Route("/commentaire", name:"app_commentaire")]

    public function commentaire(int $id){
        return $this->render("", []);
    }
}
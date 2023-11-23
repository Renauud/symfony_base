<?php

namespace App\Controller\Commentaire;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentaireController extends AbstractController{
    #[Route("/commentaire_list", name:"commentaires")]

    public function commentaire(){
        return $this->render("commentaire_list.html.twig", []);
    }
}
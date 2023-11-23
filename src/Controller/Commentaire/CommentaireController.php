<?php

namespace App\Controller\Commentaire;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Commentaire;

class CommentaireController extends AbstractController{
    #[Route("/commentaire_list", name:"commentaires")]

<<<<<<< HEAD
    public function commentaire(){
        return $this->render("commentaire_list.html.twig", []);
=======
    #[Route("/commentaire", name:"app_commentaire")]

    public function allCommentaire(array $commentaires){

        return $this->render("burger_list.html.twig", [
            "commentaires"=> $commentaires
        ]);
>>>>>>> 2437df8dc7ec688f470f8468d763a91daa21b088
    }
}
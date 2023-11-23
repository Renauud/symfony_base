<?php

namespace App\Controller\Oignon;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OignonController extends AbstractController{
    #[Route("/oignon_list", name:"oignons")]
    public function oignon(){
        return $this->render("oignon_list.html.twig",[]);
    }
}
<?php

namespace App\Controller\Image;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ImageController extends AbstractController{

    #[Route("/image_list", name:"images")]

    public function image(){
        return $this->render("image_list.html.twig", []);
    }
}
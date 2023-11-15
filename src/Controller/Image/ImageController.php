<?php

namespace App\Controller\Image;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ImageController extends AbstractController{

    #[Route("/image", name:"app_image")]

    public function image(int $id){
        return $this->render("", []);
    }
}
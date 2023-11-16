<?php

namespace App\Controller\Burger;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BurgerController extends AbstractController
{
    #[Route('/burger_list', name: 'app_burger_list')]
    public function listAll()
    {
        return $this->render('burger_list.html.twig', [
            ''=> '',
        ]);
    }
}
<?php

namespace App\Controller\Sauce;

use App\Entity\Sauce;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;


class SauceController extends AbstractController{
    #[Route('/sauce_list', name: 'app_sauce_list')]
    public function listAll(EntityManagerInterface $entityManager, int $id): Response{

        // $sauce = $entityManager->getRepository(Sauce::class)->find($id);

        return $this->render('sauce_list.html.twig',[
            ''=> '',
        ]);
    }
}
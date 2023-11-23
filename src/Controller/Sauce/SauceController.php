<?php

namespace App\Controller\Sauce;

use App\Entity\Sauce;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SauceController extends AbstractController{
    #[Route("/sauce_list",name : "sauces")]

    public function sauceRenderer(){
        return $this->render('sauce_list.html.twig', []);
    }

    public function createSauce(EntityManagerInterface $entityManager): Response{
        $sauce = new Sauce();
        $sauce->setName('Andalouse');

        $entityManager->persist($sauce);

        $entityManager->flush();

        return new Response('Saved new sauce with id' . $sauce->getId());
    }

    public function listAll(EntityManagerInterface $entityManager, int $id){
        
        foreach ($sauces as $key => $value) {
            $sauces = $entityManager->getRepository(Sauce::class)->find($id);
        }

        // return new Response();
    }
}
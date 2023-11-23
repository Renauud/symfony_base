<?php

namespace App\Controller\Sauce;

use App\Entity\Sauce;
<<<<<<< HEAD
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
=======
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
>>>>>>> 2437df8dc7ec688f470f8468d763a91daa21b088
    }
}
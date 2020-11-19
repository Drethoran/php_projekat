<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="artikli")
     */
    public function artikli(): Response
    {
        return $this->render('main/artikli.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/racun", name="racun")
     */
    public function racun(): Response
    {
        return $this->render('main/racun.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}

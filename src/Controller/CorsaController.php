<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CorsaController extends AbstractController
{
    #[Route('/corsa', name: 'corsa')]
    public function index(): Response
    {
        return $this->render('corsa/corsa.html.twig', [
            'controller_name' => 'CorsaController',
        ]);
    }
}

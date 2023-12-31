<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VehiculesController extends AbstractController

{
    #[Route('/vehicules', name: 'vehicules')]
    public function index(): Response
    {
        return $this->render('vehicules/vehicules.html.twig', [
            'controller_name' => 'VehiculesController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BravoController extends AbstractController
{
    #[Route('/bravo', name: 'bravo')]
    public function index(): Response
    {
        return $this->render('bravo/bravo.html.twig', [
            'controller_name' => 'BravoController',
        ]);
    }
}

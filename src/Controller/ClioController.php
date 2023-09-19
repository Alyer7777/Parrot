<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClioController extends AbstractController
{
    #[Route('/clio', name: 'clio')]
    public function index(): Response
    {
        return $this->render('clio/clio.html.twig', [
            'controller_name' => 'ClioController',
        ]);
    }
}

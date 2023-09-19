<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeonController extends AbstractController
{
    #[Route('/leon', name: 'leon')]
    public function index(): Response
    {
        return $this->render('leon/leon.html.twig', [
            'controller_name' => 'LeonController',
        ]);
    }
}

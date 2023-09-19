<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CapturController extends AbstractController
{
    #[Route('/captur', name: 'captur')]
    public function index(): Response
    {
        return $this->render('captur/captur.html.twig', [
            'controller_name' => 'CapturController',
        ]);
    }
}

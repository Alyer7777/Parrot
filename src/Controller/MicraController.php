<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MicraController extends AbstractController
{
    #[Route('/micra', name: 'micra')]
    public function index(): Response
    {
        return $this->render('micra/micra.html.twig', [
            'controller_name' => 'MicraController',
        ]);
    }
}

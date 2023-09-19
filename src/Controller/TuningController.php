<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TuningController extends AbstractController
{
    #[Route('/tuning', name: 'tuning')]
    public function index(): Response
    {
        return $this->render('tuning/tuning.html.twig', [
            'controller_name' => 'TuningController',
        ]);
    }
}

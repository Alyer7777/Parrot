<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class I20Controller extends AbstractController
{
    #[Route('/i20', name: 'i20')]
    public function index(): Response
    {
        return $this->render('i20/i20.html.twig', [
            'controller_name' => 'I20Controller',
        ]);
    }
}

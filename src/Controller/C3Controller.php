<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class C3Controller extends AbstractController
{
    #[Route('/c3', name: 'c3')]
    public function index(): Response
    {
        return $this->render('c3/c3.html.twig', [
            'controller_name' => 'C3Controller',
        ]);
    }
}

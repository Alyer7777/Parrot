<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class A3Controller extends AbstractController
{
    #[Route('/a3', name: 'a3')]
    public function index(): Response
    {
        return $this->render('a3/a3.html.twig', [
            'controller_name' => 'A3Controller',
        ]);
    }
}

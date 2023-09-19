<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class P308Controller extends AbstractController
{
    #[Route('/p308', name: 'p308')]
    public function index(): Response
    {
        return $this->render('p308/308.html.twig', [
            'controller_name' => 'P308Controller',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Cx5Controller extends AbstractController
{
    #[Route('/cx5', name: 'cx5')]
    public function index(): Response
    {
        return $this->render('cx5/cx5.html.twig', [
            'controller_name' => 'Cx5Controller',
        ]);
    }
}

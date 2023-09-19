<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrestaController extends AbstractController

{
    #[Route('/presta', name: 'presta', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('presta/presta.html.twig', [
            'controller_name' => 'PrestaController',
        ]);
    }
}

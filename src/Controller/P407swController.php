<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class P407swController extends AbstractController
{
    #[Route('/p407sw', name: 'p407sw')]
    public function index(): Response
    {
        return $this->render('p407sw/407sw.html.twig', [
            'controller_name' => 'P407swController',
        ]);
    }
}

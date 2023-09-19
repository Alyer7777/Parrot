<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FocusController extends AbstractController
{
    #[Route('/focus', name: 'focus')]
    public function index(): Response
    {
        return $this->render('focus/focus.html.twig', [
            'controller_name' => 'FocusController',
        ]);
    }
}

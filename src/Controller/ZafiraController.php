<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZafiraController extends AbstractController
{
    #[Route('/zafira', name: 'zafira')]
    public function index(): Response
    {
        return $this->render('zafira/zafira.html.twig', [
            'controller_name' => 'ZafiraController',
        ]);
    }
}

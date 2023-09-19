<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Xc90Controller extends AbstractController
{
    #[Route('/xc90', name: 'xc90')]
    public function index(): Response
    {
        return $this->render('xc90/xc90.html.twig', [
            'controller_name' => 'Xc90Controller',
        ]);
    }
}

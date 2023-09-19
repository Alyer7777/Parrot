<?php

namespace App\Controller;

use Doctrine\ORM\Query\AST\Functions\AbsFunction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController

/* Route vers le ficher Main */

{
    
    #[Route('/main', name: 'main/main.html.twig', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('main/main.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

}
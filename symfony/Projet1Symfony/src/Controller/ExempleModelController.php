<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExempleModelController extends AbstractController
{
    #[Route('/exemple/model', name: 'app_exemple_model')]
    public function index(): Response
    {
        return $this->render('exemple_model/index.html.twig', [
            'controller_name' => 'ExempleModelController',
        ]);
    }
}

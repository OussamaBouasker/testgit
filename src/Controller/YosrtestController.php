<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class YosrtestController extends AbstractController
{
    #[Route('/', name: 'app_yosrtest')]
    public function index(): Response
    {
        return $this->render('yosrtest/index.html.twig', [
            'controller_name' => 'YosrtestController',
        ]);
    }
}

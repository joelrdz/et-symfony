<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StandardController extends AbstractController
{
    #[Route('/standard/{id}', name: 'app_standard')]
    public function index($id): Response
    {
        dump($id);
        return $this->render('standard/index.html.twig', [
            'controller_name' => 'StandardController',
            'route_id' => $id,
        ]);
    }
}

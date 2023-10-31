<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StandardController extends AbstractController
{
    #[Route('/', name: 'standard')]
    public function index(): Response {
        return $this->redirectToRoute('page');
    }

    #[Route('/page', name: 'page')]
    public function page() {
        return $this->render('standard/page.html.twig');
    }
}

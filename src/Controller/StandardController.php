<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StandardController extends AbstractController
{
    #[Route('/', name: 'standard')]
    public function index(): Response {
        return $this->redirectToRoute('page', [
            'param1' => 1,
            'param2' => 2,
        ]);
    }

    #[Route('/page/{param1}/{param2}', name: 'page')]
    public function page($param1, $param2) {
        $result = $param1 * $param2;

        return $this->render('standard/page.html.twig', [
            'param1' => $param1,
            'param2' => $param2,
            'result' => $result,
        ]);
    }
}

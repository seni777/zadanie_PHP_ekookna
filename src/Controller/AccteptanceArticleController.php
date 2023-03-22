<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccteptanceArticleController extends AbstractController
{
    #[Route('/accteptance/article', name: 'app_accteptance_article')]
    public function index(): Response
    {
        return $this->render('accteptance_article/index.html.twig', [
            'controller_name' => 'AccteptanceArticleController',
        ]);
    }
}

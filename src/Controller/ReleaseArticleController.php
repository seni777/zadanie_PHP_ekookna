<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReleaseArticleController extends AbstractController
{
    #[Route('/release/article', name: 'app_release_article')]
    public function index(): Response
    {
        return $this->render('release_article/index.html.twig', [
            'controller_name' => 'ReleaseArticleController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/page')]
class PageController extends AbstractController
{
    #[Route('/politique-de-confidentialite', name: 'page_politique')]
    public function politique(): Response
    {
        return $this->render('page/politique.html.twig', []);
    }

    #[Route('/condition-generale-utilisation', name: 'page_cgu')]
    public function cgu(): Response
    {
        return $this->render('page/cgu.html.twig', []);
    }

    #[Route('/mentions-legales', name: 'page_mentions')]
    public function mentions(): Response
    {
        return $this->render('page/mentions.html.twig', []);
    }
}

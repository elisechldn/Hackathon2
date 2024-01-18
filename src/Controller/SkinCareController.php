<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkinCareController extends AbstractController
{
    #[Route('/skin', name: 'app_skin')]
    public function index(): Response
    {
        return $this->render('skynny-analystic.html.twig');
    }
}

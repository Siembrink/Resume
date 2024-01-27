<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', 'home')]
    public function indexAction(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/ervaring', 'experience')]
    public function experienceAction(): Response
    {
        return $this->render('experience.html.twig');
    }

    #[Route('/projecten', 'projects')]
    public function projectsAction(): Response
    {
        return $this->render('projects.html.twig');
    }
}
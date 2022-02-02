<?php

namespace App\Controller;

use App\Entity\Videogames;
use App\Repository\VideogamesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(VideogamesRepository $videogamesRepository): Response
    {
        $videogames = $videogamesRepository->findOneBy(['id' => 'desc']);

        return $this->render('home/index.html.twig', ['videogames' => $videogames]);
    }
}

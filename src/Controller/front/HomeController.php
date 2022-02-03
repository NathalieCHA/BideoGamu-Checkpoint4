<?php

namespace App\Controller\front;

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
        $videogames = $videogamesRepository->findTheLastSix();

        // $videogames = $videogamesRepository->findOneBy(['id' => 'desc']);

        return $this->render('front/home/index.html.twig', ['videogames' => $videogames]);
    }
}

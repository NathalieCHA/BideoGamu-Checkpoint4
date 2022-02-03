<?php

namespace App\Controller\front;

use App\Entity\Videogames;
use App\Form\VideogamesType;
use App\Form\SearchVideogamesType;
use App\Repository\VideogamesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/videogames')]
class VideogamesController extends AbstractController
{
    #[Route('/', name: 'videogames_index', methods: ['GET', 'POST'])]
    public function index(Request $request, VideogamesRepository $videogamesRepository): Response
    {
        $form = $this->createForm(SearchVideogamesType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $search = $form->getData()['search'];
            $videogames = $videogamesRepository->findLikeName($search);
        } else {
            $videogames = $videogamesRepository->findAll();
        }

        return $this->render('front/videogames/index.html.twig', [
            'videogames' => $videogames,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/new', name: 'videogames_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $videogame = new Videogames();
        $form = $this->createForm(VideogamesType::class, $videogame);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($videogame);
            $entityManager->flush();

            return $this->redirectToRoute('videogames_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/videogames/new.html.twig', [
            'videogame' => $videogame,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'videogames_show', methods: ['GET'])]
    public function show(Videogames $videogame): Response
    {
        return $this->render('front/videogames/show.html.twig', [
            'videogame' => $videogame,
        ]);
    }

    #[Route('/{id}/edit', name: 'videogames_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Videogames $videogame, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VideogamesType::class, $videogame);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('videogames_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/videogames/edit.html.twig', [
            'videogame' => $videogame,
            'form' => $form,
        ]);
    }




}

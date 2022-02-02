<?php

namespace App\Controller;

use App\Entity\Videogames;
use App\Form\VideogamesType;
use App\Repository\VideogamesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/videogames')]
class VideogamesController extends AbstractController
{
    #[Route('/', name: 'videogames_index', methods: ['GET'])]
    public function index(VideogamesRepository $videogamesRepository): Response
    {
        return $this->render('videogames/index.html.twig', [
            'videogames' => $videogamesRepository->findAll(),
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

        return $this->renderForm('videogames/new.html.twig', [
            'videogame' => $videogame,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'videogames_show', methods: ['GET'])]
    public function show(Videogames $videogame): Response
    {
        return $this->render('videogames/show.html.twig', [
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

        return $this->renderForm('videogames/edit.html.twig', [
            'videogame' => $videogame,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'videogames_delete', methods: ['POST'])]
    public function delete(Request $request, Videogames $videogame, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$videogame->getId(), $request->request->get('_token'))) {
            $entityManager->remove($videogame);
            $entityManager->flush();
        }

        return $this->redirectToRoute('videogames_index', [], Response::HTTP_SEE_OTHER);
    }
}

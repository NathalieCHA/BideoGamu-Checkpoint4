<?php

namespace App\Controller\admin;

use App\Entity\Videogames;
use App\Form\VideogamesType;
use App\Repository\VideogamesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VideogamesController extends AbstractController
{

    #[Route('admin/videogames/new', name: 'adminvideogames_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $videogame = new Videogames();
        $form = $this->createForm(VideogamesType::class, $videogame);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($videogame);
            $entityManager->flush();

            return $this->redirectToRoute('admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/videogames/new.html.twig', [
            'videogame' => $videogame,
            'form' => $form,
        ]);
    }

    #[Route('admin/videogames/show', name: 'adminvideogames_show', methods: ['GET'])]
    public function show(VideogamesRepository $videogamerepository): Response
    {
        return $this->render('admin/videogames/show.html.twig', [
            'videogames' => $videogamerepository->findAll(),
        ]);
    }

    #[Route('admin/videogames/{id}/edit', name: 'adminvideogames_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Videogames $videogame, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VideogamesType::class, $videogame);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin/videogames/show', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/videogames/edit.html.twig', [
            'videogame' => $videogame,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'adminvideogames_delete', methods: ['POST'])]
    public function delete(Request $request, Videogames $videogame, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$videogame->getId(), $request->request->get('_token'))) {
            $entityManager->remove($videogame);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin/videogames/show', [], Response::HTTP_SEE_OTHER);
    }

}

<?php

namespace App\Controller\front;

use App\Entity\Category;
use App\Entity\Videogames;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/category')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'category')]
    public function index(): Response
    {
        $categories = $this->getDoctrine()
        ->getRepository(Category::class)
        ->findAll();

        return $this->render('front/category/index.html.twig',
        ['categories' => $categories]);
    }

    #[Route('/{name}', name: 'category_show', methods: ['GET'])]
    public function show(string $name): Response
    {
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findBy(
                ['name' => $name],
            );

        if (empty($category)) {
            throw $this->createNotFoundException(
                'No category with id : ' . $name . ' found.'
            );
        }

        $categoryId = $category[0]->getId();

        $videogames = $this->getDoctrine()
            ->getRepository(Videogames::class)
            ->findBy(
                ['category' => $categoryId],
                ['id' => 'DESC'],
                3
            );

        return $this->render('front/category/show.html.twig', [
            'name' => $name, 'videogames' => $videogames
        ]);
    }

}

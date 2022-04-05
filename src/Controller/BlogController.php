<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\BlogArticle;
use App\Entity\BlogCategory;
use App\Entity\BlogCategoryy;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @return Response
     * @throws \Exception
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', []);
    }

    public function login(): Response
    {
        return $this->render('blog/login.html.twig', []);
    }

    public function list(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(BlogCategoryy::class);
        $blogCategories = $repository->findAll();

        return $this->render('blog/list.html.twig',[
            "blogCategories"=>$blogCategories,
        ]);
    }

    public function about(): Response
    {
        return $this->render('blog/about.html.twig', []);
    }
}
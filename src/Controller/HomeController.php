<?php

namespace App\Controller;
use App\Entity\Post;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Replace this with the logic to fetch posts from the database
        $posts = $entityManager->getRepository(Post::class)->findAll();

        return $this->render('home/index.html.twig', [
            'posts' => $posts,
        ]);
    }
    

}

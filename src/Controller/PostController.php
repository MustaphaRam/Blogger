<?php

namespace App\Controller;
use App\Entity\Post;
use App\Form\PostType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonRespon;


class PostController extends AbstractController
{
    private $postRepository;
    private $entityManager;

    /* public function _construct(){
        PostRepository $postRepository,
        MannagereDoctrime $entityManager,
    } */
    #[Route('/store/post', name: 'post')]
    public function store(Request $request): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        // Handle the form submission
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $post = $form->getData();
            $post->setAuthor(Auth::user());
            //return $this->redirectToRoute('task_success');
        }
        return $this->renderForm('post/index.html.twig', [
            'form' => $form,
        ]);
    }

}

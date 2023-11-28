<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\RegistrationFormType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonRespon;

class UserController extends AbstractController
{
    #[Route('/login', name: 'Login')]
    public function login(): Response
    {
        return $this->render('user/login.html.twig', [
            
        ]);
    }
    
    #[Route('/Register', name: 'Register')]
    public function signUp(): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        return $this->render('registration/register.html.twig', [
            'form' => $form
        ]);
    }
}

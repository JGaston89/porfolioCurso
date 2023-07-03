<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;


class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(UserRepository $UserRepository): Response
    {
        $usuarios = $UserRepository->findAll();
        return $this->render('Home/home.html.twig', [
            'controller_name' => 'HomeController', 
            'usuarios' => $usuarios,      
        ]);
    }
}

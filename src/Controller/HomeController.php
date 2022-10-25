<?php

namespace App\Controller;

use App\Repository\TaskRepository;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Environment $twig, TaskRepository $taskRepository): Response
    {
        return new Response($twig->render('home/index.html.twig', [
            'tasks' => $taskRepository->findAll(),
        ]));
    }
}

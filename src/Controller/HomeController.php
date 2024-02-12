<?php

namespace App\Controller;

use App\Repository\TrucRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(TrucRepository $trucRepository): Response
    {
       $trucs = $trucRepository->findAll();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'trucs'=>$trucs
        ]);
    }
}

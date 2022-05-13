<?php

namespace App\Controller;

use App\Repository\FamilleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FamilleController extends AbstractController
{
    #[Route('/familles', name: 'familles')]
    public function index(FamilleRepository $repository): Response
    {
        $famille = $repository->findAll();
        return $this->render('famille/familles.html.twig', [
            'familles' => $famille,
            'controller_name' => 'FamilleController',
        ]);
    }
}

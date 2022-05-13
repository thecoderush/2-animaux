<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FamilleController extends AbstractController
{
    #[Route('/familles', name: 'familles')]
    public function index(FamilleRepository $repository): Response
    {
        $familles = $repository->findAll();
        return $this->render('famille/familles.html.twig', [
            'familles' => $familles,
            'controller_name' => 'FamilleController',
        ]);
    }

    #[Route('/famille/{id}', name: 'afficher_famille')]
    public function afficherFamille(Famille $famille): Response
    {
        return $this->render('famille/famille.html.twig', [
            'famille' => $famille,
            'controller_name' => 'FamilleController',
        ]);
    }
}

<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/starships')]
class StarShipApiController extends AbstractController
{
    #[Route('', methods: ['GET'])]
    public function getCollection(StarshipRepository $repository): Response
    {
        $starships = $repository->findAll();

        return $this->json($starships);
    }

    #[Route('/{id<\d+>}', methods: ['GET'])]
    public function get(int $id, StarshipRepository $repository): Response
    {
        $starship = $repository->find($id);

        if (!$starship) {
            throw $this->createNotFoundException('Vaisseau non trouvé.');
        }

        return $this->json($starship);
    }
}
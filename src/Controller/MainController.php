<?php
namespace App\Controller;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route]
    public function HomePage() : Response 
    {
        $starShipCount = 457;
        $myShip = [
            'name' => 'USS LeafyCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'under construction',
        ];
       return $this->render("main/homepage.html.twig", [
            'numberOfStarships' => $starShipCount,
            'myShip' => $myShip,
        ]);
    }
}
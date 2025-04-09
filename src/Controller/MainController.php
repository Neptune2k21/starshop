<?php
namespace App\Controller;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController
{
    #[Route]
    public function HomePage() : Response 
    {
        return new Response(
            '<html><body>Welcome to the Home Page!</body></html>'
        );
    }
}
<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController
{
    #[Route("/", name: "home")]
    public function home()
    {
        // annotation équivalent de tableau $routes dans le fichier index.php public function homeOf
        return new response("voici notre page d'accueil");
    }

    // http://127.0.0.1:8000/
    #[Route("/contact", name: "home")]
    public function contact()
    {
        return new response("je suis la page de contact");
        // 
    }
}

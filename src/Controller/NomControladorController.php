<?php
/*este controlador ha sigut creat desde el terminal amb el següent comando--> php bin/console make:controller NomControlador*/
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class NomControladorController extends AbstractController
{
    #[Route('/nom/controlador', name: 'app_nom_controlador')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/NomControladorController.php',
        ]);
    }
}

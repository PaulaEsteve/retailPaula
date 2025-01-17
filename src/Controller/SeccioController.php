<?php

namespace App\Controller;

// use App\Service\ServeiDadesSeccio;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class SeccioController extends AbstractController
{

    private $seccions;
    private $text_busqueda;
    public function __construct($dadesSeccions)
    {
        $this->seccions = $dadesSeccions->get();
    }

    #[Route('/seccions', name: 'seccions')]
    public function seccions(): Response
    {
        return $this->render('MainContent/seccions.html.twig', ['seccions' => $this->seccions,'text_busqueda' => $this->text_busqueda]);
    }

    #[Route('/details/{codi}', name: 'details', requirements: ['codi' => '\d+'])]
    public function details($codi): Response
    {
        $resultat = array_filter(
            $this->seccions,
            function ($seccio) use ($codi) {
                return $seccio["codi"] == $codi;
            }
        );

        if (count($resultat) == 0) {

            return $this->render('MainContent/error.html.twig');
        }

        // Agafar el primer element de l'array resultant
        $seccio = array_shift($resultat);

        return $this->render('MainContent/detail-seccio.html.twig', ['seccio' => $seccio]);
    }

    #[Route('/buscar-seccio', name: 'buscar_seccio')]
    public function buscarSeccio(Request $request): Response
    {
        $text_busqueda = $request->query->get('text', '');  // Obtener el valor del campo 'text'

        // Filtrar las secciones
        $resultat = array_filter($this->seccions, function ($seccio) use ($text_busqueda) {
            return strpos(strtolower($seccio['nom']), strtolower($text_busqueda)) !== false;  // Filtrar sin distinción entre mayúsculas y minúsculas
        });

        return $this->render('MainContent/seccions.html.twig', [
            'seccions' => $resultat,  // Devolver solo las secciones que coinciden
            'text_busqueda' => $text_busqueda  // Pasar el texto de la búsqueda
        ]);
    }
}

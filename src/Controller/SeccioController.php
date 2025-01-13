<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class SeccioController {

    private $seccions = array(
        array("codi" => 1, "nom" => "Roba", "descripcio" =>"Descripció de la secció", "any" =>"2024", "articles" => array("Pantalons","Camisa","Jersey","Xaqueta")),
        array("codi" => 2, "nom" => "Electrònica", "descripcio" => "Descripció de la secció d'electrònica", "any" => "2024", "articles" => array("Mòbil", "Portàtil", "Auriculars", "Carregador")),
        array("codi" => 3, "nom" => "Llibres", "descripcio" => "Descripció de la secció de llibres", "any" => "2024", "articles" => array("Novel·la", "Història", "Ciència", "Filosofia")),
        array("codi" => 4, "nom" => "Esports", "descripcio" => "Descripció de la secció d'esports", "any" => "2024", "articles" => array("Pilota", "Raqueta", "Bicicleta", "Botas de futbol")),
    );

    #[Route('/seccio/{codi<\d+>?1}', name:'dades_seccio')]
    public function seccio($codi){

        $resultat = array_filter($this->seccions,
        function($seccio) use ($codi) {
            return $seccio["codi"] == $codi;
        });

        if (count($resultat) > 0) {
            $resposta = "";
            $resultat = array_shift($resultat); #torna el primer element
            $resposta .= "<ul>
                            <li><strong>Nom:</strong> " . $resultat["nom"] . "</li>
                            <li><strong>Descripció:</strong> " . $resultat["descripcio"] . "</li>
                            <li><strong>Any:</strong> " . $resultat["any"] . "</li>
                            <li><strong>Articles:</strong>
                         <ul>";
                        foreach ($resultat["articles"] as $article) {
                            $resposta .= "<li>" . $article . "</li>";
                        };
            $resposta .= "</ul></li></ul>";
            return new Response("<html><body>$resposta</body></html>");
        } else {
            return new Response("No s'ha trobat la secció: $codi");
        }
        
    }
}
    


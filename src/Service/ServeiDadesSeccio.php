<?php

namespace App\Service;

class ServeiDadesSeccio
{
    private $seccions = array(
        array(
            "codi" => 1,
            "nom" => "Roba",
            "descripcio" => "Secció dedicada a tota mena de roba per a totes les edats i estils, des de roba casual fins a roba formal.",
            "any" => "2024",
            "imatge" => "roba.png",
            "articles" => array("Pantalons", "Camisa", "Jersey", "Xaqueta")
        ),
        array(
            "codi" => 2,
            "nom" => "Electrònica",
            "descripcio" => "Aquí trobaràs tot tipus d'articles electrònics, com mòbils, ordinadors i altres gadgets innovadors.",
            "any" => "2024",
            "imatge" => "electronica.png",
            "articles" => array("Mòbil", "Portàtil", "Auriculars", "Carregador")
        ),
        array(
            "codi" => 3,
            "nom" => "Llibres",
            "descripcio" => "Una selecció variada de llibres de tots els gèneres: novel·les, història, ciència i més.",
            "any" => "2024",
            "imatge" => "llibres.png",
            "articles" => array("Novel·la", "Història", "Ciència", "Filosofia")
        ),
        array(
            "codi" => 4,
            "nom" => "Esports",
            "descripcio" => "Tot el material necessari per als amants de l'esport: des de pilates fins a futbol, passant per ciclisme.",
            "any" => "2024",
            "imatge" => "esport.png",
            "articles" => array("Pilota", "Raqueta", "Bicicleta", "Botas de futbol")
        ),
        array(
            "codi" => 5,
            "nom" => "Música",
            "descripcio" => "Secció per als apassionats de la música amb una gran varietat d'instruments musicals, accessoris i equipament de so.",
            "any" => "2024",
            "imatge" => "musica.png",
            "articles" => array("Guitarres", "Pianos", "Micròfons", "Amplificadors")
        ),
        array(
            "codi" => 6,
            "nom" => "Juguets",
            "descripcio" => "Juguets per a nens i nenes de totes les edats. Des de joguines educatives fins a jocs de taula per a tota la família.",
            "any" => "2024",
            "imatge" => "joguets.png",
            "articles" => array("Nines", "Cotxes de joguina", "Jocs de taula", "Lego")
        ),
    );
    

    public function get()
    {
        return $this->seccions;
    }
}

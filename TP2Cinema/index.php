<?php
use TP2Cinema\Film;
use TP2Cinema\Investiseur;
use TP2Cinema\Production;
use TP2Cinema\Realisateur;
use TP2Cinema\Acteur;
include ("Production.php");
include ("Film.php");
include ("Realisateur.php");
include ("Acteur.php");
include "Investiseur.php";

$film1 = new film(1,"Bac Nord",563921);


    echo "Info sur le film ==> \n".
        $film1->getIdFilm(). " ". $film1->getNomFilm() . " " . $film1->getNbEntrees();


$film1->setNbEntrees(789345);
echo "Modification du nombre d'entrées ==> \n".
    $film1->getIdFilm(). " - ". $film1->getNomFilm() . " - " . $film1->getNbEntrees();


$film2 = new film(2,"Boite noire",432789);
$film3 = new film(3,"The Batman",879214);

$DesFilms = [$film1, $film2, $film3];
echo "\n Listes des films 1 à 3 : \n ";
foreach ($DesFilms as $unFilm)
    {
        echo "\n Info sur le film ==> \n ".
        $unFilm->getIdFilm(). " - ". $unFilm->getNomFilm(). " - ". $unFilm->getNbEntrees();
    }

$real1 = new Realisateur("Jimenez","Cédric");
$real2 = new Realisateur("Gozian","Yann");
$real3 = new Realisateur("Reeves","Matt");


echo "\n Affichage des Films et leur Realisateurs \n";

$film1->setSonRealisateur($real1);
$film2->setSonRealisateur($real2);
$film3->setSonRealisateur($real3);


foreach ($DesFilms as $keyFilm => $unFilm)
{
    echo "\n Infos sur les films ==> \n ".
        $unFilm->getIdFilm().
        " - ". $unFilm->getNomFilm().
        " - ". $unFilm->getNbEntrees().
        " - ". $unFilm->getSonRealisateur()->getNomRealisateur() .
        " - ". $unFilm ->getSonRealisateur()->getPrenomRealisateur();
}

$acteur1 = new Acteur("Lellouche", "Gilles",false);
$acteur2 = new Acteur("Civil", "François",false);
$acteur3 = new Acteur("Leklou", "Karim",true);
$acteur4 = new Acteur("Niney", "Pierre",true);
$acteur5 = new Acteur("De Laâge", "Lou",false);
$acteur6 = new Acteur("Dussolier", "André",true);
$acteur7 = new Acteur("Pattinson", "Robert",true);
$acteur8 = new Acteur("Kravitz", "Zoe",False);
$acteur9 = new Acteur("Dano", "Paul",False);

$canalPlus = new Investiseur("Canal+", 200);
$tf1 = new Investiseur("TF1",15);
$arte = new Investiseur("Arte", 6);



$film1->ajouterActeur($acteur1);
$film1->ajouterActeur($acteur2);
$film1->ajouterActeur($acteur3);
$film1->ajouterInvestisseur($canalPlus);
$film2->ajouterActeur($acteur4);
$film2->ajouterActeur($acteur5);
$film2->ajouterActeur($acteur6);
$film2->ajouterInvestisseur($arte);
$film3->ajouterActeur($acteur7);
$film3->ajouterActeur($acteur8);
$film3->ajouterActeur($acteur9);
$film3->ajouterInvestisseur($tf1);

foreach ($DesFilms as $keyFilm => $unFilm)
{
    echo "\n Infos sur les films ==> \n ".
        $unFilm->getIdFilm(). " - ". $unFilm->getNomFilm(). " - ". $unFilm->getNbEntrees(). " - " .
        $unFilm->getSonRealisateur()->getNomRealisateur() . " - ". $unFilm ->getSonRealisateur()->getPrenomRealisateur(). " \n ".
    "Liste des acteurs ==> \n";
    foreach ($unFilm->getLesActeurs() as $unActeurs) {

        echo $unActeurs->getNomActeur() . " " . $unActeurs->getPrenomActeur() . " ". $unActeurs->getEstCesar() ." \n ";
    }
    echo "Liste des investisseur ==> \n";
    foreach ($unFilm->getInvestisseur() as $unInvestisseur) {
        echo $unInvestisseur->getNom(). "\n";

    }
}
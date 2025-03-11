<?php

use TPCinema\Film;

include ("TPCinema/Film.php");
include ("TPCinema/Realisateur.php");
include ("TPCinema/Acteur.php");



$film1 = new film(1,"Bac Nord",563921);
$film1 ->setNbEntrees(789345);


$film2 = new film(2,"Boite noire",432789);
$film3 = new film(3,"The Batman",879214);



$films = [$film1,$film2,$film3];

//foreach ($films as $valueFilm){
//    echo "Info sur le films ==> \n". $valueFilm->getIdFilm() ." - " . $valueFilm->getNomFilm() . " - " . $valueFilm->getNbEntrees() . "\n";
//}


$realisateur1 = new \TPCinema\Realisateur("Jimenez","Cédric");
$realisateur2 = new \TPCinema\Realisateur("Gozian","Yann");
$realisateur3 = new \TPCinema\Realisateur("Reevez","Matt");


$film1->setRealisateur($realisateur1);
$film2->setRealisateur($realisateur2);
$film3->setRealisateur($realisateur3);

//foreach ($films as $valueFilm){
//    echo "Info sur le films ==> \n". $valueFilm->getIdFilm() ." - " . $valueFilm->getNomFilm() . " - " . $valueFilm->getNbEntrees() . "\n". $valueFilm->getRealisateur()->getPrenomRealisateur()." - ". $valueFilm->getRealisateur()->getNomRealisateur() . "\n";

//}
//var_dump($realisateurs);



$acteur1 = new \TPCinema\Acteur("Lellouche", "Gilles",false);
$acteur2 = new \TPCinema\Acteur("Civil", "François",false);
$acteur3 = new \TPCinema\Acteur("Leklou", "Karim",true);
$acteur4 = new \TPCinema\Acteur("Niney", "Pierre",true);
$acteur5 = new \TPCinema\Acteur("De Laâge", "Lou",false);
$acteur6 = new \TPCinema\Acteur("Dussolier", "André",true);
$acteur7 = new \TPCinema\Acteur("Pattinson", "Robert",true);
$acteur8 = new \TPCinema\Acteur("Kravitz", "Zoe",False);
$acteur9 = new \TPCinema\Acteur("Dano", "Paul",False);


$categ1 = [$acteur1, $acteur2 , $acteur3];
$categ2 = [$acteur4, $acteur5 , $acteur6];
$categ3 = [$acteur7, $acteur8 , $acteur9];

$film1->ajouterActeur($acteur1);
$film1->ajouterActeur($acteur2);
$film1->ajouterActeur($acteur3);


foreach ($films as $valueFilm){
    echo "Info sur le films ==> \n". $valueFilm->getIdFilm() ." - " . $valueFilm->getNomFilm() . " - " . $valueFilm->getNbEntrees() . "\n". $valueFilm->getRealisateur()->getPrenomRealisateur()." - ". $valueFilm->getRealisateur()->getNomRealisateur() . "\n";


}







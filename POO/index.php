<?php

//import la classe cat
include("Cat.php");
include ("Animal.php");

const genreRef = [
    1=> "Female",
    2=> "Male",
    3=> "Other"
];

//Tableau de référence qui vienne réferencer par exemple la varible color
const colorRef = [
    0 => "No color",
    1 => "White",
    2 => "Blue",
    3 => "Grey"
];

$felix = new cat("Félix",1,1);
//Acces a la variable name de manière public
//$felix-> name= "Felix";
//var_dump($felix);

$listAnimal = new animal();
$listAnimal->setCat($felix);
$listAnimal->setCat(new cat("Filou",1,1));
$pistache = new cat("Pistache",2,3);
$listAnimal->setCat($pistache);


//Changer une variable de l'objet du tableau
$listAnimal->getCat()[1]->name ="Filoux";
var_dump($listAnimal ->getCat());
echo "liste de chat \n";
foreach ($listAnimal->getCat() as $matricule => $cat) {
    echo "Le nom du chat numero ". $matricule . " est " . $cat->name . "\n";

}
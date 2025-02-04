<?php

// Constante est une variable statique
const genreRef = [
    1=> "Female",
    2=> "Male",
    3=> "UniSexe"
];

//Tableau de référence qui vienne réferencer par exemple la varible color
const colorRef = [
    1 => "White",
    2 => "Blue",
    3 => "Grey"
];
class Cat
{
    private string $name;
    private int $gender;
    private int $age;
    private int $weight;
    private int $color;

    public function setGender(int $genderRefKey){
        if ($genderRefKey >= 1 && $genderRefKey <=3) {
            $this->gender = $genderRefKey;
        }
    }

    public function getGender(){
        return genreRef[$this->gender];
    }

}





$felix = new cat();
//Acces a la variable name de manière public
//$felix-> name= "Felix";
$felix->setGender(3);
echo $felix->getGender();
var_dump($felix);
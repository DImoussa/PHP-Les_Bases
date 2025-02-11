<?php

// Constante est une variable statique
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
class Cat
{
    private string $name;
    private int $gender;
    private int $age;
    private int $weight;
    private int $color;



    public function __construct(string $name, int $gender, int $color = 1 ) // si on donn
    {
         $this->name = $name;
         $this->setGender($gender);
         $this->setColor($color);
    }


    public  function setGender (int $genderRefKey) : void{
        if ($genderRefKey >= 1 && $genderRefKey <=3) {
            $this->gender = $genderRefKey;
        }else{
            $this->gender = 3;
        }
    }



    

    public function getGender() :string{
        return genreRef[$this->gender];
    }

    public function setColor(int $colorKey) : void{
        if ($colorKey >= 1 && $colorKey <=3){
            $this->color = $colorKey;
        }else{
            $this->color=0;
        }
    }

    public function getColor(): int
    {
        return $this->color;
    }



}






$felix = new cat("Félix",1,1);
//Acces a la variable name de manière public
//$felix-> name= "Felix";
var_dump($felix);
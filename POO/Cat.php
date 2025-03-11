<?php

// Constante est une variable statique

class Cat
{
    public string $name;
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







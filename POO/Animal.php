<?php

class Animal
{
    private array $listcat = [];

    public function  setCat(cat $cat) : void
    {
        $this->listcat[] =$cat;
    }

    public function getCat(): array
    {
        return $this-> listcat;
    }
}
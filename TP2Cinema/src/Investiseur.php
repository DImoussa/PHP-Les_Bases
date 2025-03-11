<?php

namespace Tp2cinema;
class Investiseur
{
    private string $nom;
    private int $capital;


    public function __construct(string $nom, int $capital)
    {
        $this->nom = $nom;
        $this->capital = $capital;
    }

    public function getNom(): string
    {
        return $this->nom;
    }


    public function getCapital(): int
    {
        return $this->capital;
    }



}
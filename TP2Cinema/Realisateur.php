<?php

namespace TP2Cinema;

class Realisateur
{
    private string $nomRealisateur;
    private string $prenomRealisateur;

    public function __construct(string $unNomRea, string $unPrenomRea)
    {
        $this->nomRealisateur = $unNomRea;
        $this->prenomRealisateur =  $unPrenomRea;
    }


    public function getNomRealisateur():string
    {
        return $this->nomRealisateur;
    }

    public function getPrenomRealisateur():string
    {
       return $this->prenomRealisateur;
    }
}
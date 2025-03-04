<?php

namespace TP2Cinema;

class Acteur
{
    private string $nomActeur;
    private string $PrenomActeur;
    private bool $estCesar;

    public function __construct(string $unNom,string $unPrenom, bool $estUnCesar)
    {
        $this->nomActeur = $unNom;
        $this->PrenomActeur  =$unPrenom;
        $this->estCesar =$estUnCesar;
    }
    public function getNomActeur(): string
    {
        return $this->nomActeur;
    }
    public function getPrenomActeur(): string
    {
        return $this->PrenomActeur;
    }

    public function getEstCesar(): string
    {
        if ($this->estCesar === true)
        {
            return  "True";
        }
        else {
            return "False";
        }

        // condition ternaire return $this->estCesar == 0 ? "false" : "true"; c'est l'équivalent de ce qu'il y'a juste en haut

    }

    public function setEstCesar(bool $estCesar): void
    {
        $this->estCesar = $estCesar;
    }

}
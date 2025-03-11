<?php

namespace Tp2cinema;
class Production
{
    private array $investisseur = [];




    public function getInvestisseur(): array
    {
        return $this->investisseur;
    }

    public function ajouterInvestisseur(Investiseur $investisseur): void
    {
        $this->investisseur[] = $investisseur;
    }



}
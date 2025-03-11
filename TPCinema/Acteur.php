<?php

namespace TPCinema;

class Acteur
{
    private string $nomActeur;
    private string $prenomActeur;
    private bool $estCesar;

    /**
     * @param string $nomActeur
     * @param string $prenomActeur
     * @param bool $estCesar
     */
    public function __construct(string $nomActeur, string $prenomActeur, bool $estCesar)
    {
        $this->nomActeur = $nomActeur;
        $this->prenomActeur = $prenomActeur;
        $this->estCesar = $estCesar;
    }

    public function getNomActeur(): string
    {
        return $this->nomActeur;
    }

    public function getPrenomActeur(): string
    {
        return $this->prenomActeur;
    }

    public function isEstCesar(): bool
    {
        return $this->estCesar;
    }

    public function setEstCesar(bool $estCesar): void
    {
        $this->estCesar = $estCesar;
    }




}
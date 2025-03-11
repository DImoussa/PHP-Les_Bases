<?php

namespace Tp2cinema;
class Film extends Production
{
    private int $idFilm;
    private string $nomFilm;
    private int $nbEntrees;

    private ?Realisateur $sonRealisateur;

    private array $lesActeurs = [];

    public function __construct(int $unId, string $unNom, int $unNb, Realisateur $unRea = null)
    {
        $this->idFilm = $unId;
        $this->nomFilm = $unNom;
        $this->nbEntrees = $unNb;
        $this->sonRealisateur = $unRea;
    }

    public function getIdFilm(): int
    {
        return $this->idFilm;
    }

    public function getNomFilm(): string
    {
        return $this->nomFilm;
    }

    public function getNbEntrees(): int
    {
        return $this->nbEntrees;
    }


    public function setNbEntrees(int $nbEntrees): void
    {
        $this->nbEntrees = $nbEntrees;
    }

    public function getSonRealisateur(): ?Realisateur
    {
        return $this->sonRealisateur;
    }


    public function setSonRealisateur(?Realisateur $sonRealisateur): void
    {
        $this->sonRealisateur = $sonRealisateur;
    }

    public function getLesActeurs(): array
    {
        return $this->lesActeurs;
    }

    public function ajouterActeur(Acteur $acteur):void
    {
        $this->lesActeurs[] = $acteur;
    }




}
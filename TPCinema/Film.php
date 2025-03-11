<?php

namespace TPCinema;

class Film
{
    private int $idFilm;
    private  string $nomFilm;
    private  int $nbEntrees;

    private ?Realisateur $realisateur;

    private array $acteurs = [];




    public function __construct(int $idFilm, string $nomFilm, int $nbEntrees, ?Realisateur $realisateur = null)
    {
        $this->idFilm = $idFilm;
        $this->nomFilm = $nomFilm;
        $this->nbEntrees = $nbEntrees;
        $this->realisateur = $realisateur;

    }

    /**
     * @return int
     */
    public function getIdFilm(): int
    {
        return $this->idFilm;
    }

    /**
     * @return string
     */
    public function getNomFilm(): string
    {
        return $this->nomFilm;
    }

    /**
     * @return int
     */
    public function getNbEntrees(): int
    {
        return $this->nbEntrees;
    }

    /**
     * @param int $nbEntrees
     */
    public function setNbEntrees(int $nbEntrees): void
    {
        $this->nbEntrees = $nbEntrees;
    }

    public function getRealisateur(): ?Realisateur
    {
        return $this->realisateur;
    }



    public function setRealisateur(Realisateur $realisateur): void
    {
        $this->realisateur = $realisateur;
    }


    public function ajouterActeur(Acteur $acteur): void {
        $this->acteurs[] = $acteur;
    }


    public function getActeurs(): array {
        return $this->acteurs;
    }










}

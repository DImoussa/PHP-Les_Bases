<?php



class Client
{
    private int $idClient;
    private string $nomClient;
    private array $releves = [];


    public function __construct(int $idClient, string $nomClient)
    {
        $this->idClient = $idClient;
        $this->nomClient = $nomClient;
    }

    public function getReleves(): array
    {
        return $this->releves;
    }

    public function ajouterReleves(Releve $releves): void
    {
        $this->releves[] = $releves;
    }

    public function getNomClient(): string
    {
        return $this->nomClient;
    }

    public function setNomClient(string $nomClient): void
    {
        $this->nomClient = $nomClient;
    }

    public function getIdClient(): int
    {
        return $this->idClient;
    }

    public function setIdClient(int $idClient): void
    {
        $this->idClient = $idClient;
    }



}
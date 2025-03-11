<?php

class Agent
{
    private int $idAgent;
    private string $nomAgent;
    private array $clients = [];

    public function __construct(int $idAgent, string $nomAgent){
        $this->idAgent = $idAgent;
        $this->nomAgent = $nomAgent;
    }

    public function getIdAgent(): int
    {
        return $this->idAgent;
    }

    public function setIdAgent(int $idAgent): void
    {
        $this->idAgent = $idAgent;
    }

    public function getNomAgent(): string
    {
        return $this->nomAgent;
    }

    public function setNomAgent(string $nomAgent): void
    {
        $this->nomAgent = $nomAgent;
    }

    public function getClients(): array
    {
        return $this->clients;
    }

    public function ajouterClients(Client $clients): void
    {
        $this->clients[] = $clients;
    }


}
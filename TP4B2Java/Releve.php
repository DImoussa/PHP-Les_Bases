<?php

class Releve
{
    private string $dateReleve;
    private int $valueReleve;

    public function __construct(string $dateReleve, int $valueReleve){
        $this->dateReleve = $dateReleve;
        $this->valueReleve = $valueReleve;

    }

    public function getDateReleve(): string
    {
        return $this->dateReleve;
    }
    public function getValueReleve(): int{
        return $this->valueReleve;
    }

    public function setDateReleve(string $dateReleve): void{
        $this->dateReleve = $dateReleve;
    }
    public function setValueReleve(int $valueReleve): void{
        $this->valueReleve = $valueReleve;
    }

}
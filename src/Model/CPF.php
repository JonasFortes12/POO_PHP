<?php
namespace MyBank\Model;

class CPF
{
    private string $cpf;
    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpfNumber(): string
    {
        return $this->cpf;
    }

}
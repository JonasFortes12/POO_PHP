<?php
require_once 'src/CPF.php';

class Owner
{
    private string $name;
    private CPF $cpf;

    public function __construct(string $name, CPF $cpf)
    {
        $this->name = $this->nameValidation($name);
        $this->cpf = $cpf;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    private function nameValidation(string $name): string|null
    {
        if (strlen($name) < 5) return null;
        return $name;
    }

}
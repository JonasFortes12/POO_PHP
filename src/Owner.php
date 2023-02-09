<?php

class Owner
{
    private string $name;
    private string $cpf;

    public function __construct(string $name, string $cpf)
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
        return $this->cpf;
    }

    private function nameValidation(string $name): string|null
    {
        if (strlen($name) < 5) return null;
        return $name;
    }

}
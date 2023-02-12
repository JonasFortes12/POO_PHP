<?php
namespace MyBank\Model;

class Person
{
    protected string $name;
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
    public function getCPF(): CPF
    {
        return $this->cpf;
    }
    protected function nameValidation(string $name): string|null
    {
        if (strlen($name) < 5) return null;
        return $name;
    }

}
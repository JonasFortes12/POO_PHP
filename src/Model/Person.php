<?php
namespace MyBank\Model;

abstract class Person
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
    final protected function nameValidation(string $name): string
    {
        if (strlen($name) < 5){
            throw new \LengthException(
                "Name length very small. Must be bigger than 5 chars"
            );
        }
        return $name;
    }

}
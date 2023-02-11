<?php

class Employee extends Person
{
    private string $role;

    public function __construct(string $name, CPF $cpf, string $role)
    {
        parent::__construct($name, $cpf);
        $this->role = $role;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setName(string $name):void
    {
        $this->name = parent::nameValidation($name);
    }
}
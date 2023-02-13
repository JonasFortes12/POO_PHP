<?php

namespace MyBank\Model\Employees;

use MyBank\Model\CPF;
use MyBank\Model\Person;

abstract class Employee extends Person
{
    private float $salary;

    public function __construct(string $name, CPF $cpf, float $salary)
    {
        parent::__construct($name, $cpf);
        $this->salary = $salary;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setName(string $name): void
    {
        $this->name = parent::nameValidation($name);
    }

    abstract public function calculateBonus(): float;

    public function salaryIncrease($increase): void
    {
        if($increase < 0) return;
        $this->salary += $increase;
    }

}
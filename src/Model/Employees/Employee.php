<?php

namespace MyBank\Model\Employees;

use MyBank\Model\CPF;
use MyBank\Model\Person;

abstract class Employee extends Person
{
    private string $role;
    private float $salary;

    public function __construct(string $name, CPF $cpf, string $role, float $salary)
    {
        parent::__construct($name, $cpf);
        $this->role = $role;
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

    public function calculateBonus(): float
    {
        return $this->getSalary() * 0.1;
    }

    public function salaryIncrease($increase): void
    {
        if($increase < 0) return;
        $this->salary += $increase;
    }

}
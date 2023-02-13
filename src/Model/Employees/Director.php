<?php

namespace MyBank\Model\Employees;

class Director extends Employee
{
    public function calculateBonus(): float
    {
        return $this->getSalary() * 2;
    }

    public function authentication(string $password):bool
    {
        return $password === '1234';
    }

}
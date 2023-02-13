<?php

namespace MyBank\Model\Employees;

use MyBank\Model\Authenticable;
use MyBank\Service\Authenticator;


class Director extends Employee implements Authenticable
{
    public function calculateBonus(): float
    {
        return $this->getSalary() * 2;
    }

    public function authentication(string $password): bool
    {
        return $password === '1234';
    }
}
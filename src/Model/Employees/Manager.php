<?php

namespace MyBank\Model\Employees;

use MyBank\Model\Authenticable;

class Manager extends Employee implements Authenticable
{
    public function calculateBonus():float
    {
        return $this->getSalary();
    }

    public function authentication(string $password): bool
    {
        return $password = '4321';
    }
}
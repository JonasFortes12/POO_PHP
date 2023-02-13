<?php

namespace MyBank\Model\Employees;

class Manager extends Employee
{
    public function calculateBonus():float
    {
        return $this->getSalary();
    }

}
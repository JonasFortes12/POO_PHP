<?php

namespace MyBank\Model\Employees;

class Developer extends Employee
{
    public function givePromotion():void
    {
        $this->salaryIncrease($this->getSalary() * 0.75);
    }

    public function calculateBonus(): float
    {
        return 500.00;
    }
}
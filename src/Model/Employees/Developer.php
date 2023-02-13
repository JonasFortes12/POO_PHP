<?php

namespace MyBank\Model\Employees;

class Developer extends Employee
{
    public function givePromotion():void
    {
        $this->salaryIncrease($this->getSalary() * 0.75);
    }
}
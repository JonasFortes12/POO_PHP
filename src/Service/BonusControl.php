<?php

namespace MyBank\Service;

use MyBank\Model\Employees\Employee;

class BonusControl
{
    private float $allBonus = 0;

    public function getAllBonus():float
    {
        return $this->allBonus;
    }
    public function addBonus(Employee $employee):void
    {
        $this->allBonus += $employee->calculateBonus();
    }

}
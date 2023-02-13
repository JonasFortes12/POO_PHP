<?php

namespace MyBank\Model\Employees;

class VideoEditor extends Employee
{
    public function calculateBonus(): float
    {
        return 600.00;
    }
}
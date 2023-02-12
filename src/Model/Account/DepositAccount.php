<?php

namespace MyBank\Model\Account;

class DepositAccount extends Account
{

    protected function tribute(): float
    {
        return 0.03;
    }
}
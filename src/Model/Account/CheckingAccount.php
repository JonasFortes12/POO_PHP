<?php

namespace MyBank\Model\Account;

class CheckingAccount extends Account
{

    protected function tribute(): float
    {
        return 0.05;
    }
}
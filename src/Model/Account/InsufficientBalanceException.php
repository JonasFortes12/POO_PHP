<?php

namespace MyBank\Model\Account;

class InsufficientBalanceException extends \DomainException
{
    public function __construct(float $value, float $balance)
    {
        $message = <<<TEXT
            The balance is R$ {$balance}. Impossible R$ {$value} withdraw.
            TEXT;
        parent::__construct($message);
    }
}
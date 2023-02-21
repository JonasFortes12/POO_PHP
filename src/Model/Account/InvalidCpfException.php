<?php

namespace MyBank\Model\Account;

class InvalidCpfException extends \DomainException
{
    public function __construct(string $cpfTyped)
    {
        $message = PHP_EOL . <<<TEXT
            Invalid format from CPF. Must be like example format: '123.456.789-10'
            CPF typed: {$cpfTyped}
        TEXT . PHP_EOL;

        parent::__construct($message);
    }
}
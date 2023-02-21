<?php

require_once './autoload.php';

use MyBank\Model\Account\CheckingAccount;
use MyBank\Model\Account\Owner;
use MyBank\Model\Address;
use MyBank\Model\CPF;


$account = new CheckingAccount(
    new Owner(
        'Eduardo Garcia',
        new CPF('063-487.639-30'),
        new Address('Sobral-Ce', 'Centro', '--', 'S/n')
    )
);

$account->deposit(1000);

try {
$account->deposit(100);
}catch (InvalidArgumentException $exception){
    echo $exception->getMessage() . PHP_EOL;
}

echo $account->getBalance() . PHP_EOL;
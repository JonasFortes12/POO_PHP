<?php

require_once './autoload.php';

use MyBank\Model\{CPF, Address};
use MyBank\Model\Account\{CheckingAccount, DepositAccount, Owner};

$address1 = new Address(
    'Sobral-CE',
    'Centro',
    'Monte Alverne',
    '34 - ALTOS'
);

$account1 = new CheckingAccount(
    new Owner(
        'Rodrigo Amperiano',
        new CPF('024.679.712-45'),
        $address1)
);

$account2 = new DepositAccount(
    new Owner(
        'Lupita Marques',
        new CPF('532.884.409-67'),
        $address1)
);


$account1->deposit(300);
$account1->withdraw(100);
var_dump($account1->getBalance());

$account2->deposit(300);
$account2->withdraw(100);
var_dump($account2->getBalance());


exit();

$text = <<<TEXT
    Name: {$account1->getOwner()->getName()}
    CPF: {$account1->getOwner()->getCpf()->getCpfNumber()}
    Balance: {$account1->getBalance()}
    Address
        City: {$account1->getOwner()->getAddress()->getCity()}
        Neighborhood: {$account1->getOwner()->getAddress()->getNeighborhood()}
        Street: {$account1->getOwner()->getAddress()->getStreet()}
        Number: {$account1->getOwner()->getAddress()->getNumber()}
    TEXT;





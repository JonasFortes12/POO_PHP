<?php
require_once 'src/Account.php';
require_once 'src/Owner.php';
require_once 'src/CPF.php';
require_once 'src/Address.php';

$address = new Address(
    'Sobral-CE',
    'Centro',
    'Monte Alverne',
    '34 - ALTOS'
);

$account1 = new Account(
    new Owner(
        'Rodrigo Amperiano',
        new CPF('024.679.712-45'),
        $address)
);

//$account2 = new Account(new Owner('André Lopes', new CPF('060.913.743-90')));

//$account3 = new Account(new Owner('André', new CPF('270.133.423-71')));


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


echo $text . PHP_EOL;

//$account1->deposit(1000);
//
//$account1->transfer(400, $account2);
//
//echo Account::getInstanceNumber() . PHP_EOL;

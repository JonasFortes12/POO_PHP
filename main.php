<?php

require_once './autoload.php';

use MyBank\Model\CPF;
use MyBank\Model\Account\Account;
use MyBank\Model\Account\Owner;
use MyBank\Model\Address;
use MyBank\Model\Employee;

$address1 = new Address(
    'Sobral-CE',
    'Centro',
    'Monte Alverne',
    '34 - ALTOS'
);

$account1 = new Account(
    new Owner(
        'Rodrigo Amperiano',
        new CPF('024.679.712-45'),
        $address1)
);

//$account2 = new Account(new Owner('André Lopes', new CPF('060.913.743-90')));

//$account3 = new Account(new Owner('André', new CPF('270.133.423-71')));

$employee = new Employee('Reginaldo', new CPF('673.784.972-66'), 'Programador');


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


$text2 = <<<TEXT
    Nome: {$employee->getName()}
    Cargo: {$employee->getRole()}
    CPF: {$employee->getCPF()->getCpfNumber()}
TEXT;
echo $text2 . PHP_EOL;

$employee->setName('José Reginaldo Cavalcante');

$text2 = <<<TEXT
    Nome: {$employee->getName()}
    Cargo: {$employee->getRole()}
    CPF: {$employee->getCPF()->getCpfNumber()}
TEXT;
echo $text2 . PHP_EOL;


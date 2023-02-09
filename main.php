<?php
require_once 'src/Account.php';
require_once 'src/Owner.php';
require_once 'src/CPF.php';

$account1 = new Account(new Owner('Rodrigo Amperiano', new CPF('024.679.712-45')));

$account2 = new Account(new Owner('André Lopes', new CPF('060.913.743-90')));

$account3 = new Account(new Owner('André', new CPF('270.133.423-71')));



$text = <<<TEXT
    Name: {$account2->getOwner()->getName()}
    CPF: {$account2->getOwner()->getCpf()}
    Balance: {$account2->getBalance()}
    TEXT;


echo $text . PHP_EOL;

$account1->deposit(1000);

$account1->transfer(400, $account2);

echo Account::getInstanceNumber() . PHP_EOL;

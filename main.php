<?php
require_once 'src/Account.php';
require_once 'src/Owner.php';

$account1 = new Account(new Owner('Rodrigo Amperiano', '024.679.712-45'));

$account2 = new Account(new Owner('André Lopes', '060.913.743-90'));

$account3 = new Account(new Owner('André', '270.133.423-71'));



$text = <<<TEXT
    Name: {$account1->getOwner()->getName()}
    CPF: {$account1->getOwner()->getCpf()}
    Balance: {$account1->getBalance()}
    TEXT;


echo $text . PHP_EOL;

$account1->deposit(1000);

$account1->transfer(400, $account2);

echo Account::getInstanceNumber() . PHP_EOL;

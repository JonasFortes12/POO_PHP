<?php
require_once 'src/Account.php';

$account1 = new Account('Rodrigo Amperiano', '024.679.712-45');

$account2 = new Account('André Lopes', '060.913.743-90');


echo "Nome: {$account1->getName()} | CPF: {$account1->getCPF()}" . PHP_EOL;
echo "Nome: {$account2->getName()} | CPF: {$account2->getCPF()}" . PHP_EOL;

$account1->deposit(1000);

$account1->transfer(400, $account2);



<?php
require_once 'src/Account.php';

$account1 = new Account();

$account2 = new Account();
$account2->setCPF('060.913.743-90');

$account1->deposit(1000);

$account1->transfer(400, $account2);

echo $account2->getBalance() . PHP_EOL . $account2->getCPF() . PHP_EOL;


<?php
require_once 'src/Account.php';

$account1 = new Account();
$account1->ownerCpf = '734.564.678-12';
$account1->ownerName = 'José de Alencar';
$account1->balance = 400;


$account2 = new Account();
$account2->ownerCpf = '754.534.358-18';
$account2->ownerName = 'Gregório de Matos';
$account2->balance = 300;

var_dump($account1, $account2);

$account1->transfer(400, $account2);

var_dump($account1, $account2);
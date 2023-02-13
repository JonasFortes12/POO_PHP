<?php

require_once './autoload.php';

use MyBank\Service\Authenticator;
use MyBank\Model\Employees\Director;
use MyBank\Model\Employees\Manager;
use MyBank\Model\Account\Owner;
use MyBank\Model\CPF;
use MyBank\Model\Address;

$authenticator = new Authenticator();

$director = new Director(
    'Amadeu Liracildo',
    new CPF('546.466.347-47'),
    4500.00);

$manager = new Manager(
    'Eduardo Carvalho',
    new CPF('654.697.234-58'),
    8500.00);

$owner = new Owner(
    'Lupita Marques',
    new CPF('987.456.123-98'),
    new Address('Sobral-CE',
        'Centro',
        'Alverne',
        '34b')
);


$authenticator->login($director, '1234');
$authenticator->login($manager, '7890');
$authenticator->login($owner, 'abcd');






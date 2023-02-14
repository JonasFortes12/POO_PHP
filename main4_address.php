<?php

require_once './autoload.php';
use MyBank\Model\Address;


$address1 = new Address(
    'Sobral - CE',
    'Centro',
    'Rua Pintor Lemos',
    '70b'
);

$address2 = new Address(
    'Porto - PI',
    'Centro',
    'Av. Matias Olímpio',
    '450'
);

echo $address1 . PHP_EOL . $address2 . PHP_EOL;


$address2->neighborhood = 'Pedra Mole';

echo $address2->getNeighborhood() . PHP_EOL;
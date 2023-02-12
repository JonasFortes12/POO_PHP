<?php
namespace MyBank\Model\Account;

use MyBank\Model\CPF;
use MyBank\Model\Person;
use MyBank\Model\Address;

class Owner extends Person
{
    private Address $address;

    public function __construct(string $name, CPF $cpf, Address $address)
    {
        parent::__construct($name, $cpf);
        $this->address = $address;
    }
    public function getAddress():Address
    {
        return $this->address;
    }

}
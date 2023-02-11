<?php
require_once 'src/CPF.php';
require_once 'src/Person.php';

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
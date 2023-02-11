<?php
require_once 'src/CPF.php';

class Owner
{
    private string $name;
    private CPF $cpf;
    private Address $address;

    public function __construct(string $name, CPF $cpf, Address $address)
    {
        $this->name = $this->nameValidation($name);
        $this->cpf = $cpf;
        $this->address = $address;
    }
    public function getName():string
    {
        return $this->name;
    }
    public function getCpf():CPF
    {
        return $this->cpf;
    }
    public function getAddress():Address
    {
        return $this->address;
    }
    private function nameValidation(string $name): string|null
    {
        if (strlen($name) < 5) return null;
        return $name;
    }

}
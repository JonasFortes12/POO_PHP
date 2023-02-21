<?php
namespace MyBank\Model;

use MyBank\Model\Account\InvalidCpfException;

final class CPF
{
    private string $cpf;
    public function __construct(string $cpf)
    {
        $assertCpf = filter_var( $cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if($assertCpf === false){
            throw new InvalidCpfException($cpf);
        }
        $this->cpf = $assertCpf;

    }

    public function getCpfNumber(): string
    {
        return $this->cpf;
    }

}
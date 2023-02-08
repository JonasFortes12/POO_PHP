<?php

class Account
{
    private float $balance;

    public function __construct(
        public readonly string $ownerName,
        public readonly string $ownerCpf
    )
    {
        $this->balance = 0;
    }
    
    public function withdraw(float $value): void
    {
        if ($value > $this->balance && $value < 0) {
            echo 'Valor inválido!' . PHP_EOL;
            return;
        }
        $this->balance -= $value;
    }

    public function deposit(float $value): void
    {
        if ($value < 0) {
            echo 'Valor inválido!' . PHP_EOL;
            return;
        }
        $this->balance += $value;
    }

    public function transfer(float $value, Account $account): void
    {
        $this->withdraw($value);
        $account->deposit($value);
    }

    public function getBalance():float
    {
        return $this->balance;
    }

    public function getCPF():string
    {
        return $this->ownerCpf;
    }

    public function getName():string
    {
        return $this->ownerName;
    }


}
<?php

class Account
{
    public string $ownerCpf;
    public string $ownerName;
    public float $balance;

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


}
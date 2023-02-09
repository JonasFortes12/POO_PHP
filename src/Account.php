<?php

class Account
{
    private Owner $owner;
    private float $balance;
    private static int $instanceNunber = 0;

    public function __construct(Owner $owner)
    {
        $this->owner = $owner;
        $this->balance = 0;

        self::$instanceNunber++;//Access to static property into Account class
    }

    public function __destruct()
    {
        //Called when the object lose his reference
        self::$instanceNunber--;
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

    public function getBalance(): float
    {
        return $this->balance;
    }

    public static function getInstanceNumber(){
        return self::$instanceNunber;
    }

    public function getOwner():Owner
    {
        return $this->owner;
    }
}
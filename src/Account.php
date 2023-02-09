<?php

class Account
{
    private string $ownerCpf;
    private string $ownerName;
    private float $balance;
    private static int $instanceNunber = 0;

    public function __construct(string $ownerName, string $ownerCpf)
    {
        $this->balance = 0;
        $this->ownerName = $this->nameValidation($ownerName);
        $this->ownerCpf = $ownerCpf;

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

    public function getCPF(): string
    {
        return $this->ownerCpf;
    }

    public function getName(): string
    {
        return $this->ownerName;
    }

    private function nameValidation(string $name): string|null
    {
        if (strlen($name) < 5) return null;
        return $name;
    }

    public static function getInstanceNumber(){
        return self::$instanceNunber;
    }

}
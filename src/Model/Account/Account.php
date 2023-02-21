<?php
namespace MyBank\Model\Account;

use http\Exception\InvalidArgumentException;

abstract class Account
{
    private Owner $owner;
    private float $balance;
    private static int $instanceNumber = 0;

    public function __construct(Owner $owner)
    {
        $this->owner = $owner;
        $this->balance = 0;

        self::$instanceNumber++;//Access to static property into Account class
    }

    public function __destruct()
    {
        //Called when the object lose his reference
        self::$instanceNumber--;
    }

    public function withdraw(float $value): void
    {
        if ($value > $this->balance || $value < 0) {
            throw new InsufficientBalanceException(
                $value,
                $this->balance
            );
        }

        $this->balance -= $value + ($value * $this->tribute());
    }

    public function deposit(float $value): void
    {
        if ($value < 0) {
            throw new \InvalidArgumentException(
                'Invalid Value. Less than zero.'
            );
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

    public static function getInstanceNumber():int{
        return self::$instanceNumber;
    }

    public function getOwner():Owner
    {
        return $this->owner;
    }

    abstract protected function tribute():float;

}
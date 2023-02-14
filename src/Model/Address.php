<?php namespace MyBank\Model;


use MyBank\Service\PropertiesAccess;

class Address
{
    use PropertiesAccess;
    private string $city;
    private string $neighborhood;
    private string $street;
    private string $number;

    public function __construct(
        string $city,
        string $neighborhood,
        string $street,
        string $number
    )
    {
        $this->city = $city;
        $this->neighborhood = $neighborhood;
        $this->street = $street;
        $this->number = $number;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function __toString(): string
    {
        $text = <<<text
        _______________Address________________
            {$this->street}, {$this->number}
            {$this->city}, {$this->neighborhood}
        ______________________________________
        text;
        return $text;
    }

    private function setCity(string $city): void
    {
        $this->city = $city;
    }

    private function setNeighborhood(string $neighborhood): void
    {
        $this->neighborhood = $neighborhood;
    }

    private function setStreet(string $street): void
    {
        $this->street = $street;
    }

    private function setNumber(string $number): void
    {
        $this->number = $number;
    }

}
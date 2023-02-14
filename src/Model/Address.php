<?php namespace MyBank\Model;

/**
 * @property-write  string $city;
 * @property-write  string $neighborhood;
 * @property-write  string $street;
 * @property-write  string $number;
 *
 */
class Address
{
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

    public function __get(string $name)
    {
        $method = 'get' . ucfirst($name);

        return $this->$method();
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

    public function __set(string $name, string $value)
    {
        $method = 'set' . ucfirst($name);

        return $this->$method($value);
    }
}
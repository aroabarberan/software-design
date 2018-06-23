<?php namespace App\Model;

class Address
{
    /** @var Country */
    public $country;
    /** @var string */
    public $name;
    /** @var int */
    public $number;

    public function __construct(Country $country, string $name, int $number) {
        $this->country = $country;
        $this->name = $name;
        $this->number = $number;
    }
}

<?php namespace App\Model;

class Address
{
    /** @var string */
    public $streetName;
    /** @var int */
    public $streetNumber;

    public function __construct(string $streetName, int $streetNumber) {
        $this->streetName = $streetName;
        $this->streetNumber = $streetNumber;
    }
}

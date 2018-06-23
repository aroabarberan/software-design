<?php namespace App\Service;

use App\Model\Address;
use App\Model\Country;
use App\Model\Language;

class AddressService
{

    public function __construct()
    {
    }

    /**
     * @return Address[]
     */
    public function readAddresses(): array
    {
        // TODO
        return [
            new Address(new Country("England", new Language("English", 6500000)), "Privet drive", 10),
            new Address(new Country("Germany", new Language("German", 120000)), "Arjasika Nosw", 21),
            new Address(new Country("Spain", new Language("Spanish", 2800000)), "Luna", 82),
            new Address(new Country("France", new Language("French", 4000)), "Bugeba", 3)
        ];
        // throw new \Exception("NOT IMPLEMENTED");
    }

}

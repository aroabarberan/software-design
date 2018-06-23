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
            new Address("Privet drive", 10),
            new Address("Arjasika Nosw", 21),
            new Address("Luna", 82),
            new Address("Bugeba", 3)
        ];
    }

}

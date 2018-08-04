<?php namespace App\Service;

use App\Model\Address;

class AddressService implements Service
{

    /**
     * @return Address[]
     */
    public function read(): array
    {
        return [
            new Address("Privet drive", 4),
            new Address("Arjasika Nosw", 21),
            new Address("Luna", 82),
            new Address("Bugeba", 3)
        ];
    }

}

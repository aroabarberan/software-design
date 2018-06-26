<?php namespace App\Service;

use App\Model\Country;

class CountryService implements Service
{
    
    /**
     * @return Country[]
     */
    public function read() : array
    {
        return [
            new Country("England", 6500000),
            new Country("Germany", 120000),
            new Country("Spain", 2800000),
            new Country("France", 4000)
        ];
    }

}

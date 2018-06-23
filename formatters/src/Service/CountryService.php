<?php namespace App\Service;

use App\Model\Country;
use App\Model\Language;

class CountryService
{

    public function __construct()
    {
    }

    /**
     * @return Country[]
     */
    public function readCountries() : array
    {
        // TODO
        return [
            new Country("England", 6500000),
            new Country("Germany", 120000),
            new Country("Spain", 2800000),
            new Country("France", 4000)
        ];
    }

}

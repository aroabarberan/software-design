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
            new Country("England", new Language("English", 6500000)),
            new Country("Germany", new Language("German", 120000)),
            new Country("Spain", new Language("Spanish", 2800000)),
            new Country("France", new Language("French", 4000))
        ];
        // throw new \Exception("NOT IMPLEMENTED");
    }

}

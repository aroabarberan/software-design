<?php namespace App\Controller;

use App\Service\CountryService;

class CountryController implements Controller
{

    /** @var CountryService */
    private $service;

    public function __construct(CountryService $service)
    {
        $this->service = $service;
    }

    public function response(): string
    {
        // TODO
        $countries = [];
        $allCountries = $this->service->readCountries();

        foreach ($allCountries as $key => $country) {
            $countries[] = [
                'name' => $country->name,
                'nameLanguage' => $country->laguage->name,
                'numberOfSpeakers' => $country->laguage->numberOfSpeakers,
            ];
        }
        $countries = array_map(function ($c) {
            return implode(" - ", (array) $c);
        }, $countries);
        return implode("<br>", $countries);

        // throw new \Exception("NOT IMPLEMENTED");
    }

}

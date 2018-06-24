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
        $countries = $this->service->readCountries();
        $countries = array_map(function ($c) {
            return implode(" - ", [
                'name' => $c->name,
                'area' => $c->area,
            ]);
        }, $countries);
        return implode("<br>", $countries);
    }

}

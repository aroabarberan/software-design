<?php namespace App\Controller;

use App\Service\CountryService;
use App\Util\Design;

class CountryController implements Controller
{

    /** @var CountryService */
    private $service;
    /** @var Design */
    private $design;

    public function __construct(CountryService $service, Design $design)
    {
        $this->service = $service;
        $this->design = $design;
    }

    public function response(string $separator = " ... ", string $design = "simbol"): string
    {
        $countries = $this->service->readCountries();
        $countries = array_map(function ($c) {
            return ['name' => $c->name, 'area' => $c->area];
        }, $countries);
        return $this->design->getDesign($design, $countries, $separator);
    }

}

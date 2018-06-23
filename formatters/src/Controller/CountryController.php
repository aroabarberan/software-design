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
        throw new \Exception("NOT IMPLEMENTED");
    }

}

<?php namespace App\Controller;

use App\Service\Service;
use App\Util\Formatter;

class CountryController implements Controller
{

    /** @var Service */
    private $service;
    /** @var Formatter */
    private $formatter;

    public function __construct(Service $service, Formatter $formatter)
    {
        $this->service = $service;
        $this->formatter = $formatter;
    }

    public function response(): string
    {
        $countries = $this->service->read();
        $countries = array_map(function ($c) {
            return ['name' => $c->name, 'area' => $c->area];
        }, $countries);
        return $this->formatter->getFormat((array) $countries);
    }

}

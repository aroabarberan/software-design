<?php namespace App\Controller;

use App\Service\CountryService;
use App\Util\Formatter;
use App\Util\Table;
use App\Util\Simbol;


class FormatterCountryController implements Controller
{

    /** @var CountryService */
    private $service;
    /** @var Formatter */
    private $formatter;

    public function __construct(CountryService $service, Formatter $formatter)
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
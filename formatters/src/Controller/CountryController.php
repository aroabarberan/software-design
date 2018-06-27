<?php namespace App\Controller;

use App\Service\Service;
use App\Util\Formatter;
use App\Util\Convert;

class CountryController implements Controller
{

    /** @var Service */
    private $service;
    /** @var Formatter */
    private $formatter;
    /** @var Convert */
    private $convert;

    public function __construct(Service $service, Formatter $formatter, Convert $convert)
    {
        $this->service = $service;
        $this->formatter = $formatter;
        $this->convert = $convert;
    }

    public function response(): string
    {
        $countries = $this->service->read();
        $countries = array_map(function ($c) {
            return ['name' => $this->convert->convertString($c->name), 'area' => $this->convert->convertString($c->area)];
        }, $countries);
        return $this->formatter->getFormat((array) $countries);
    }

}

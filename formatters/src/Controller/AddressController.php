<?php namespace App\Controller;

use App\Service\Service;
use App\Util\Formatter;
use App\Util\Convert;

class AddressController implements Controller
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
        $addresses = $this->service->read();
        $addresses = array_map(function ($a) {
            return ['streetName' => $this->convert->convertString($a->streetName) , 'streetNumber' => $this->convert->convertString($a->streetNumber)];
        }, $addresses);
        
        return $this->formatter->getFormat((array) $addresses);
    }

}

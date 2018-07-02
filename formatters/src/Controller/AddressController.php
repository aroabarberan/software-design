<?php namespace App\Controller;

use App\Service\Service;
use App\Util\Formatter;

class AddressController implements Controller
{

    /** @var Service */
    private $service;
    /** @var Formatter */
    private $formatter;

    public function __construct(AddressService $service, Formatter $formatter)
    {
        $this->service = $service;
        $this->formatter = $formatter;
    }

    public function response(): string
    {
        $addresses = $this->service->read();
        $addresses = array_map(function ($a) {
            return ['streetName' => $a->streetName , 'streetNumber' => $a->streetNumber];
        }, $addresses);
        
        return $this->formatter->getFormat((array) $addresses);
    }

}

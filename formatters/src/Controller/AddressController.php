<?php namespace App\Controller;

use App\Service\AddressService;
use App\Util\Design;

class AddressController implements Controller
{

    /** @var AddressService */
    private $service;
    /** @var Design */
    private $design;

    public function __construct(AddressService $service, Design $design)
    {
        $this->service = $service;
        $this->design = $design;
    }

    public function response(string $separator = " ... ", string $design = "simbol"): string
    {
        $addresses = $this->service->readAddresses();
        $addresses = array_map(function ($a) {
            return ['streetName' => $a->streetName, 'streetNumber' => $a->streetNumber];
        }, $addresses);
        return $this->design->getDesign($design, $addresses, $separator);
    }

}

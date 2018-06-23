<?php namespace App\Controller;

use App\Service\AddressService;

class AddressController implements Controller
{

    /** @var AddressService */
    private $service;

    public function __construct(AddressService $service)
    {
        $this->service = $service;
    }

    public function response(): string
    {
        // TODO
        $addresses = [];
        $allAddresses = $this->service->readAddresses();

        foreach ($allAddresses as $key => $address) {
            $addresses[] = [
                'streetName' => $address->streetName,
                'streetNumber' => $address->streetNumber
            ];
        }
        $addresses = array_map(function ($a) {
            return implode(" - ", (array) $a);
        }, $addresses);
        return implode("<br>", $addresses);
    }

}

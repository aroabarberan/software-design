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
                'country' => $address->country->name,
                'name' => $address->name,
                'number' => $address->number
            ];
        }
        $addresses = array_map(function ($a) {
            return implode(" - ", (array) $a);
        }, $addresses);
        return implode("<br>", $addresses);
        // throw new \Exception("NOT IMPLEMENTED");
    }

}

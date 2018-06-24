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

    public function response(string $separator, string $design): string
    {
        $addresses = $this->service->readAddresses();
        $addresses = array_map(function ($a) use ($separator) {
            return implode($separator, [
                'streetName' => $a->streetName,
                'streetNumber' => $a->streetNumber,
            ]);
        }, $addresses);
        return implode("<br>", $addresses);
    }

}

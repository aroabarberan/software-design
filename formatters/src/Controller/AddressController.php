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
        echo "<pre>" . print_r($allAddresses, true);

        // foreach ($allAddresses as $key => $address) {
        //     $addresses[] = [
        //         'name' => $address->name,
        //         'nameLanguage' => $address->laguage->name,
        //         'numberOfSpeakers' => $address->laguage->numberOfSpeakers,
        //     ];
        // }
        // $addresses = array_map(function ($c) {
        //     return implode(" - ", (array) $c);
        // }, $addresses);
        return implode("<br>", $addresses);
        // throw new \Exception("NOT IMPLEMENTED");
    }

}

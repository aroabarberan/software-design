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
        throw new \Exception("NOT IMPLEMENTED");
    }

}

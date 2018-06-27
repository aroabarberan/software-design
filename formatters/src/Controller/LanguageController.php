<?php namespace App\Controller;

use App\Service\Service;
use App\Util\Formatter;

class LanguageController implements Controller
{

    /** @var Service */
    private $service;
    /** @var Formatter */
    private $formatter;

    public function __construct(Service $service, Formatter $formatter)
    {
        $this->service = $service;
        $this->formatter = $formatter;
    }

    public function response(): string
    {
        $languages = $this->service->read();
        $languages = array_map(function ($l) {
            return (array) $l;
        }, $languages);
        return $this->formatter->getFormat((array) $languages);
    }

}

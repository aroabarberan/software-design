<?php namespace App\Controller;

use App\Service\LanguageService;
use App\Util\Formatter;

class LanguageController implements Controller
{

    /** @var LanguageService */
    private $service;
    /** @var Formatter */
    private $formatter;

    public function __construct(LanguageService $service, Formatter $formatter)
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

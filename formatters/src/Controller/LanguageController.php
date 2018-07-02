<?php namespace App\Controller;

use App\Service\Service;
use App\Util\Formatter;

class LanguageController implements Controller
{

    /** @var Service */
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
            return ['name' => $l->name , 'numberOfSpeakers' => $l->numberOfSpeakers];
        }, $languages);
        return $this->formatter->getFormat((array) $languages);
    }

}

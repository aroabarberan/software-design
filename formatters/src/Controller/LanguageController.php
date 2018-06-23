<?php namespace App\Controller;

use App\Service\LanguageService;

class LanguageController implements Controller
{

    /** @var LanguageService */
    private $service;

    public function __construct(LanguageService $service)
    {
        $this->service = $service;
    }

    public function response(): string
    {
        $languages = $this->service->readLanguages();
        $languages = array_map(function ($e) {
            return implode(" - ", (array) $e);
        }, $languages);
        return implode("<br>", $languages);
    }

}

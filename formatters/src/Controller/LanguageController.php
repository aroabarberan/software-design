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

    public function response(string $separator, string $design): string
    {
        $languages = $this->service->readLanguages();
        $languages = array_map(function ($e) use ($separator) {
            return implode($separator, (array) $e);
        }, $languages);
        return implode("<br>", $languages);
    }

}

<?php namespace App\Controller;

use App\Service\LanguageService;
use App\Util\Design;

class LanguageController implements Controller
{

    /** @var LanguageService */
    private $service;
    /** @var Design */
    private $design;

    public function __construct(LanguageService $service, Design $design)
    {
        $this->service = $service;
        $this->design = $design;
    }

    public function response(string $separator = " ... ", string $design = "simbol"): string
    {
        $languages = $this->service->readLanguages();
        $languages = array_map(function ($l) use ($separator) {
            return (array) $l;
        }, $languages);
        return $this->design->getDesign($design, $languages, $separator);
    }

}

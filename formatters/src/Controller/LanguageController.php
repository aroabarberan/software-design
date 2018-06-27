<?php namespace App\Controller;

use App\Service\Service;
use App\Util\Formatter;
use App\Util\Convert;

class LanguageController implements Controller
{

    /** @var Service */
    private $service;
    /** @var Formatter */
    private $formatter;
    /** @var Convert */
    private $convert;

    public function __construct(Service $service, Formatter $formatter, Convert $convert)
    {
        $this->service = $service;
        $this->formatter = $formatter;
        $this->convert = $convert;
    }

    public function response(): string
    {
        $languages = $this->service->read();
        $languages = array_map(function ($l) {
            return ['name' => $this->convert->convertString($l->name) , 'numberOfSpeakers' => $this->convert->convertString($l->numberOfSpeakers)];
        }, $languages);
        return $this->formatter->getFormat((array) $languages);
    }

}

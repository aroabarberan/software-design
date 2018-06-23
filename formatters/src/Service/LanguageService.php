<?php namespace App\Service;

use App\Model\Language;

class LanguageService
{

    public function __construct()
    {
    }

    /**
     * @return Language[]
     */
    public function readLanguages() : array
    {
        return [
            new Language("English", 6500000),
            new Language("German", 120000),
            new Language("Spanish", 2800000),
            new Language("French", 4000),
        ];
    }

}

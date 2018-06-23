<?php namespace App\Model;

class Country
{
    /** @var string */
    public $name;
    /** @var Language */
    public $language;

    public function __construct(string $name, Language $language) {
        $this->name = $name;
        $this->laguage = $language;

    }

}

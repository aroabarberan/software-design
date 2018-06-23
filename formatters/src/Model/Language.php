<?php namespace App\Model;

class Language
{

    /** @var string */
    public $name;
    /** @var int */
    public $numberOfSpeakers;

    public function __construct(string $name, string $numberOfSpeakers)
    {
        $this->name = $name;
        $this->numberOfSpeakers = $numberOfSpeakers;
    }

}

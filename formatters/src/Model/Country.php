<?php namespace App\Model;

class Country
{
    /** @var string */
    public $name;
    /** @var int */
    public $area;

    public function __construct(string $name, int $area) {
        $this->name = $name;
        $this->area = $area;
    }

}

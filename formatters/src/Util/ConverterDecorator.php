<?php namespace App\Util;

abstract class ConverterDecorator implements Formatter
{

    protected $formatter;

    public function __construct(Formatter $formatter) {
        $this->formatter = $formatter;
    }

    abstract function getFormat(array $elements): string;

}

<?php namespace App\Util;

class UpperCaseConverter extends ConverterDecorator
{
    public function getFormat(array $elements): string
    {
        return strtoupper($this->formatter->getFormat($elements));;
    }
}

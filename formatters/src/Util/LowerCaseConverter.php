<?php namespace App\Util;

class LowerCaseConverter extends ConverterDecorator
{
    public function getFormat(array $elements): string
    {
        return strtolower($this->formatter->getFormat($elements));
    }
}

<?php namespace App\Util;

class LowerCaseConverter extends ConverterDecorator
{
    public function getFormat(array $elements): string
    {
        $this->formatter->getFormat($elements);
        return strtolower($this->formatter);
    }
}

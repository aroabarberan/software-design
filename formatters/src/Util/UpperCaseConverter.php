<?php namespace App\Util;

class UpperCaseConverter extends ConverterDecorator
{
    public function getFormat(array $elements): string
    {
        $this->formatter = array_map(function ($e) {
            return strtoupper((string) $e);
        }, $elements);
        return $this->formatter->getFormat($this->formatter);
    }
}

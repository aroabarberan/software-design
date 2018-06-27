<?php namespace App\Util;

class UpperCaseConvert implements Convert
{
    public function convertString(string $element): string
    {
        return strtoupper($element);
    }
}

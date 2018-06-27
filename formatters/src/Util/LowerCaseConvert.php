<?php namespace App\Util;

class LowerCaseConvert implements Convert
{

    public function convertString(string $element): string
    {
        return strtolower($element);
    }

}

<?php namespace App\Util;

class Simbol extends Formatter
{

    public function __construct()
    {
    }

    public function getFormat(array $elements, string $separator): string
    {
        $elements = array_map(function ($e) use ($separator) {
            return implode($separator, $e);
        }, $elements);

        return '- ' . implode("<br>- ", $elements);
    }
}

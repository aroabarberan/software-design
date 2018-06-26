<?php namespace App\Util;

class Simbol implements Formatter
{

    private $separator;
    private $simbol;

    public function __construct(string $separator, string $simbol)
    {
        $this->separator = $separator;
        $this->simbol = $simbol;
    }

    public function getFormat(array $elements): string
    {
        $elements = array_map(function ($e) {
            return implode($this->separator, $e);
        }, $elements);
        return $this->simbol . ' ' . implode("<br>" . $this->simbol . ' ', $elements);
    }
}

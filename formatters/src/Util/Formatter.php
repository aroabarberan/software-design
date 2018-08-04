<?php namespace App\Util;

interface Formatter
{
    public function getFormat(array $elements): string;
}

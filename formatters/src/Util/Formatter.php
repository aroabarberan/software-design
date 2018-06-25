<?php namespace App\Util;


abstract class Formatter
{

    abstract public function getFormat(array $elements, string $separator);

}
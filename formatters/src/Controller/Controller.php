<?php namespace App\Controller;

interface Controller
{
    public function response(string $separator, string $design): string;
}

<?php namespace App\Exception;

class NotFound extends \Exception
{
    protected $message = 'Not Found';
    protected $code = 404;
}

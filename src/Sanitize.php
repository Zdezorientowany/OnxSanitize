<?php

namespace Onx\Sanitize;
use Illuminate\Support\Facades\Facade;

class Sanitize extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'sanitize';
    }

    public static function text($string)
    {
        return sanitize($string);
    }

}
<?php

namespace Onx\Sanitize;

class Sanitize
{
    public static function text($string)
    {
        return sanitize($string);
    }
}
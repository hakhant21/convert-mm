<?php

namespace Hakhant\Converter\Facades;

use Illuminate\Support\Facades\Facade;

class Convert extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'convert';
    }
}

<?php

namespace Hakhant\Converter\Helpers;

trait HasNumber
{
    public function mm($value)
    {
        return strtr($value, config('convert.mm_number'));
    }

    public function en($value)
    {
        return strtr($value, config('convert.en_number'));
    }
}
<?php

namespace Hakhant\Converter\Helpers;

use Hakhant\Converter\Helpers\HasNumber;

trait HasDate
{
    use HasNumber;

    public function mmDate($date)
    {
        return $this->year($date).' ခုနှစ်၊'. $this->month($date). 'လ၊ ' . ( $this->day($date) . ' ရက်'); 
    }

    public function mmDateNumber($date)
    {
        return $this->mm($date);
    }

    public function year($date)
    {
        $year = date('Y', strtotime($date));

        return $this->mm($year);
    }

    public function month($date)
    {
        $month = date('m', strtotime($date));

        $trimzero = ltrim($month, '0');

        return strtr($trimzero, config('convert.mm_month'));
    }

    public function day($date)
    {
        $day = date('d', strtotime($date));
        
        return $this->mm($day);
    }
}
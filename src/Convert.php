<?php 

namespace Hakhant\Converter;

use Hakhant\Converter\Helpers\HasNrc;
use Hakhant\Converter\Helpers\HasDate;
use Hakhant\Converter\Helpers\HasNumber;

class Convert
{
     use HasDate;
     use HasNumber;
     use HasNrc;

     public function regions()
     {
          return config('convert.regions');
     }

     public function mmRegions() 
     {
        return config('convert.regions_mm');
     }

     public function citizens()
     {
         return config('convert.citizens');
     }

     public function mmCitizens()
     {
         return config('convert.citizens_mm');
     }

     public function townships()
     {
         return config('convert.townships');
     }

     public function mmTownships()
     {
         return config('convert.townships_mm');
     }

     public function nrcNumber($number)
     {
         return $this->en($number);
     }

     public function mmNrcNumber($number)
     {
         return $this->mm($number);
     }

     public function fullNrc($region, $township, $citizen, $number)
     {
         $formattedNrc = $this->formattedNrc($region, $township, $citizen);

         return $formattedNrc . $this->en($number);
     }

     public function mmFullNrc($region_mm, $township_mm, $citizen_mm, $number)
     {
        $mmFormattedNrc = $this->formattedNrc($region_mm, $township_mm, $citizen_mm);

        return $mmFormattedNrc . $this->mm($number);
     }
}

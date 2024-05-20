<?php

namespace Hakhant\Converter\Helpers;

trait HasNrc
{

    public function formattedNrc($region, $township, $citizen)
    {
        $formattedRegion = $this->formatRegion($region);
        $formattedCitizen = $this->formatCitizen($citizen);

        return $formattedRegion . $township . $formattedCitizen;
    }
    public function formatRegion($region)
    {
        // Ensure $region ends with '/' and remove any existing '/'
        return rtrim($region, '/') . '/';
    }

    public function formatCitizen($citizen)
    {
        // Check if $citizen is wrapped with '(' and ')'
        $citizen = str_replace(['(', ')'], '', $citizen);

        // Add '(' at the beginning and ')' at the end of $citizen
        return '(' . $citizen . ')';
    }
}
<?php

use Hakhant\Converter\Facades\Convert;

it('can get all regions', function(){
    $regions = Convert::regions();

    expect($regions)->toBeArray();
});

it('can get all citizens array', function(){
    $citizens = Convert::citizens();

    expect($citizens)->toBeArray();
});

it('can get all townships array', function(){
    $townships = Convert::townships();

    expect($townships)->toBeArray();
});
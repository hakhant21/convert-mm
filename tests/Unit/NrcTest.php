<?php

use Hakhant\Converter\Facades\Convert;

it('can get all regions with english format', function(){
    $regions = Convert::regions();

    expect($regions[0]['region_en'])->toBe('1/');
    expect($regions)->toBeArray();
});

it('can get all regions array with myanmar format', function(){
    $mmRegions = Convert::mmRegions();

    expect($mmRegions[0]['region_mm'])->toBe('၁/');
    expect($mmRegions)->toBeArray();
});

it('can get all citizens array with english format', function(){
    $citizens = Convert::citizens();

    expect($citizens[0]['citizen_en'])->toBe('(N)');
    expect($citizens)->toBeArray();
});

it('can get all citizens array with myanmar format', function(){
    $mmCitizens = Convert::mmCitizens();

    expect($mmCitizens[0]['citizen_mm'])->toBe('(နိုင်)');
    expect($mmCitizens)->toBeArray();
});

it('can get all townships array with english format', function(){
    $townships = Convert::townships();

    expect($townships[0]['township_en'])->toBe('KaMaTa');
    expect($townships)->toBeArray();
});

it('can get all townships array with myanmar format', function(){
    $mmTownships = Convert::mmTownships();

    expect($mmTownships[0]['township_mm'])->toBe('ကမတ');
    expect($mmTownships)->toBeArray();
});

it('can nrc number with eng format', function()
{
    $eng_number = Convert::nrcNumber('123456');
    expect($eng_number)->toBe('123456');
});

it('can nrc number with mm format', function()
{
    $mm_number = Convert::mmNrcNumber('123456');

    expect($mm_number)->toBe('၁၂၃၄၅၆');
});

it('can get full nrc eng format', function()
{
    $fullNrc = Convert::fullNrc('9','PaMaNa', 'N', 123456);

    expect($fullNrc)->toBe('9/PaMaNa(N)123456');
});

it('can get full nrc mm format', function()
{
    $mmFullNrc = Convert::mmFullNrc('၉','ပမန', 'နိုင်', 123456);

    expect($mmFullNrc)->toBe('၉/ပမန(နိုင်)၁၂၃၄၅၆');
});
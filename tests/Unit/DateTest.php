<?php

use Hakhant\Converter\Facades\Convert;

it('can convert to myanmar number', function(){
    $convert = Convert::mm('1234567');

    expect($convert)->toBeString('၁၂၃၄၅၆၇');
});

it('can convert to english number', function(){
    $convert = Convert::en('၁၂၃၄၅၆၇');

    expect($convert)->toBeString('1234567');
});

it('can convert myanmar date format', function(){
    $today = '2023-08-8';

    $convert = Convert::mmDate($today);

    expect($convert)->toBeString('၂၀၂၃ ခုနှစ်၊သြဂုတ်လ၊ ၀၇ ရက်');
});

it('can convert myanmar date number format', function(){
    $today = '2023-08-8';

    $convert = Convert::mmDateNumber($today);

    expect($convert)->toBeString('၂၀၂၃-၀၈-၈');
});

it('can get only year myanmar date format', function(){
    $today = '2023-08-8';

    $convert = Convert::mm($today);

    expect($convert)->toBeString('၂၀၂၃');
});

it('can get only month myanmar date format', function(){
    $today = '2023-08-8';

    $convert = Convert::month($today);

    expect($convert)->toBeString('သြဂုတ်');
});

it('can get only day myanmar date format', function(){
    $today = '2023-08-8';

    $convert = Convert::day($today);

    expect($convert)->toBeString('၀၈');
});
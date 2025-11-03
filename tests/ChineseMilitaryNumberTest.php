<?php

use Recca\ChineseMilitaryNumber\ChineseMilitaryNumber;

it('converts 0-9 digits to Chinese military numerals', function () {
    $cmn = new ChineseMilitaryNumber;
    expect($cmn->format('0123456789'))->toBe('洞么兩三四五六拐八勾');
});

it('accepts integer input', function () {
    $cmn = new ChineseMilitaryNumber;
    expect($cmn->format(123))->toBe('么兩三');
});

it('preserves leading zeros for string input', function () {
    $cmn = new ChineseMilitaryNumber;
    expect($cmn->format('0912'))->toBe('洞勾么兩');
});

it('keeps non-digit characters unchanged', function () {
    $cmn = new ChineseMilitaryNumber;
    expect($cmn->format('A1B2-3'))
        ->toBe('A么B兩-三');
});

it('handles multibyte non-digit characters', function () {
    $cmn = new ChineseMilitaryNumber;
    expect($cmn->format('測7試'))
        ->toBe('測拐試');
});

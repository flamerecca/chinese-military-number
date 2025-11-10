<?php

use Illuminate\Support\Carbon;
use Recca\ChineseMilitaryNumber\ChineseMilitaryTime;

it('converts 00:00 to Chinese military time', function () {
    $t = new ChineseMilitaryTime;
    $time = Carbon::create(2025, 1, 1, 0, 0, 0);

    expect($t->fromCarbon($time))->toBe('洞洞洞洞');
});

it('converts 09:17 to Chinese military time', function () {
    $t = new ChineseMilitaryTime;
    $time = Carbon::create(2025, 1, 1, 9, 17, 0);

    expect($t->fromCarbon($time))->toBe('洞勾么拐');
});

it('converts 12:34 to Chinese military time', function () {
    $t = new ChineseMilitaryTime;
    $time = Carbon::create(2025, 1, 1, 12, 34, 0);

    expect($t->fromCarbon($time))->toBe('么兩三四');
});

it('converts 23:59 to Chinese military time', function () {
    $t = new ChineseMilitaryTime;
    $time = Carbon::create(2025, 1, 1, 23, 59, 59);

    expect($t->fromCarbon($time))->toBe('兩三五勾');
});

it('converts now() to Chinese military time', function () {
    Carbon::setTestNow(Carbon::create(2025, 1, 1, 14, 5, 0));

    $t = new ChineseMilitaryTime;

    expect($t->now())->toBe('么四洞五');

    Carbon::setTestNow();
});

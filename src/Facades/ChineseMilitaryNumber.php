<?php

namespace Recca\ChineseMilitaryNumber\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Recca\ChineseMilitaryNumber\ChineseMilitaryNumber
 */
class ChineseMilitaryNumber extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Recca\ChineseMilitaryNumber\ChineseMilitaryNumber::class;
    }
}

<?php

namespace Recca\ChineseMilitaryNumber;

use Illuminate\Support\Carbon;

class ChineseMilitaryTime
{
    protected ChineseMilitaryNumber $chineseMilitaryNumber;

    public function __construct()
    {
        $this->chineseMilitaryNumber = new ChineseMilitaryNumber;
    }

    /**
     * Carbon 物件轉換成軍用時間
     */
    public function fromCarbon(Carbon $time): string
    {
        return $this->chineseMilitaryNumber->format($time->format('H'))
            .$this->chineseMilitaryNumber->format($time->format('i'));
    }

    /**
     * 現在時間轉換成軍用時間
     */
    public function now(): string
    {
        return $this->fromCarbon(Carbon::now());
    }
}

<?php

namespace Recca\ChineseMilitaryNumber;

class ChineseMilitaryNumber
{
    /**
     * 將數字轉換成中文軍用數字。
     *
     * 轉換表:
     * 洞么兩三四五六拐八勾
     *
     * 範例:
     * format("0912") => "洞勾么兩"
     *
     * @param  int|string  $number  需要被轉換的數字或數字字串
     */
    public function format(int|string $number): string
    {
        $map = [
            '0' => '洞',
            '1' => '么',
            '2' => '兩',
            '3' => '三',
            '4' => '四',
            '5' => '五',
            '6' => '六',
            '7' => '拐',
            '8' => '八',
            '9' => '勾',
        ];

        $chars = mb_str_split((string) $number);

        $converted = array_map(function (string $ch) use ($map): string {
            return array_key_exists($ch, $map) ? $map[$ch] : $ch; // 非數字原樣保留
        }, $chars);

        return implode('', $converted);
    }
}

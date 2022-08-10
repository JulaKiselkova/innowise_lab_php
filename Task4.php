<?php

namespace src;

class Task4
{
    public static function main(string $input)
    {
        $results = preg_split('/[\s_-]+/', $input);
        $arrOfResult = [];
        foreach ($results as $res) {
            $res[0] = strtoupper($res);
            array_push($arrOfResult, $res);
        }
        return implode("", $arrOfResult);
    }
}

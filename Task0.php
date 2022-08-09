<?php
namespace src;
//class Task1 {
//    public function main($inputNumber){
//        $inputNumber>30 ?:"More than 30";
//        $inputNumber>20 && $inputNumber<=30 ?:"More than 20";
//        $inputNumber>10 && $inputNumber<=20 ?:"More than 10";
//        $inputNumber<=10 ?:"Equal or less than 10";
//    }
//
//function main($inputNumber){
//    $inputNumber>30 ?:"More than 30";
//    $inputNumber>20 && $inputNumber<=30 ?:"More than 20";
//    $inputNumber>10 && $inputNumber<=20 ?:"More than 10";
//    $inputNumber<=10 ?:"Equal or less than 10";
//}
//echo(main(25));
$number=1234567;

function req($number){
    if ($number < 10){
        return $number;
    } else {
        $sum = 0;
        do {
            $sum += $number % 10;

        }
        while ($number === (int) $number / 10);
        echo $sum;
    }
}

function req2($n){
    if($n < 10) {
        return $n;
    } else {
        return ($n - 1) % 9 + 1;
    }

}
function main(int $n)
{
    if(gettype($n) === "int"){
        if($n < 10) {
            return $n;
        } else {
            return ($n - 1) % 9 + 1;
        }
    } else {
        throw new \InvalidArgumentException("Wrong type");
    }
}
echo (req2(7548));
//echo (main("ghj"));


function data($date ){
    if(strtotime($date) === false){
        throw new \InvalidArgumentException("Wrong data");
    } else {
    $today = date("d.m.Y");
    $d1_ts = strtotime($today);
    $d2_ts = strtotime($date);
    $seconds = abs($d1_ts - $d2_ts);
    $days = $seconds/(60*60*24);
    echo $days;
    }
}
echo "days ";
//data("2022-08-01");
data("2022-08-01");
//data("fgyuiol");

function str($input) {
    if(gettype($input) != "string"){
        throw new \InvalidArgumentException("Wrong data");
    } else {
        $results = preg_split('/[\s_-]+/', $input);
        $arrOfResult = [];
        foreach ($results as $res) {
            $res[0] = strtoupper($res);
            array_push($arrOfResult, $res);
        }
        return implode("", $arrOfResult);
    }
}
echo(str("The quick-brown_fox jumps over the_lazy-dog"));

function getMondays(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday') {
    $mondayConst = 1;
    $start = "${lastYear}-${lastMonth}-01.";
    $end = date("Y-m-t", strtotime("${year}-${month}-01."));


    $startDate = strtotime($start);
    $endDate = strtotime($end);

    echo $start;
    echo $end;

    $startWeekDay = date("N", $startDate);
    $endWeekDay = date("N", $endDate);

    if ($startWeekDay < $endWeekDay)
    {
        $partialWeekCount = ($mondayConst >= $startWeekDay && $mondayConst <= $endWeekDay);
    }else if ($startWeekDay == $endWeekDay)
    {
        $partialWeekCount = $startWeekDay == $mondayConst;
    }else
    {
        $partialWeekCount = ($mondayConst >= $startWeekDay || $mondayConst <= $endWeekDay);
    }
    echo "MOOOOOOOOOON";
    echo "\n";
    echo floor(  abs( $endDate-$startDate )/(60*60*24*7))+$partialWeekCount;

    //echo "\n";
    //echo $start;
    //echo date("N", $startDate);


}

function fib(int $n)
{
    if ($n <= 1)
        return $n;
    return fib($n - 1) +
        fib($n - 2);
}
echo "\n";
echo "fib";
echo fib(25);
echo "\n";

function json(string $json) {
    $obj = json_decode($json, true);
    $arrOfStrings = [];
    foreach ($obj as $key => $value) {
        if(gettype($value)!="array") {
            array_push($arrOfStrings, "{$key}: {$value}\n");
        } else {
            foreach ($value as $keyInside => $valueInside)
            array_push($arrOfStrings, "{$keyInside}: {$valueInside}\n");
        }
        //echo "{$key} => {$value} ";
    }
    //var_dump(json_decode($json, true));
    //var_dump($arrOfStrings);
    echo implode("", $arrOfStrings);
    echo "end/";

}

//echo daycount("Monday", strtotime("01.07.2022"), 0);
echo "MONNN";
getMondays(2022,2021,01,12);
json('{"a":1,"b":2,"c":3,"d":4,"e":5}');

json('{
"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}
}
');

function sum(array $arr, int $number) {
    $count = count($arr) - 2;
    $result = [];
    for ($i = 0; $i < $count; $i++) {
        if ($arr[$i] + $arr[$i+1] + $arr[$i+2] === $number) {
            array_push($result, "{$arr[$i]} + {$arr[$i+1]} + {$arr[$i+2]} = $number");
        }
    }
    return $result;
}

$arr = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
var_dump(sum($arr,10));

function collatz(int $input) {
    if($input === 1) {
        return 1;
    }
    else if($input%2 === 0) {
        $newNumber = $input/2;
        echo "${newNumber},";
        return collatz($newNumber);
    } else {
        $newNumber = ($input*3)+1;
        echo "${newNumber},";
        return collatz($newNumber);
    }
}
collatz(12);

function del(array $arr, int $position) {
    var_dump($arr);
    array_splice($arr, $position,1);
    //unset($arr[$position]);
    var_dump($arr);
}
$x = array(1, 2, 3, 4, 5);
del($x,3)
//echo daycount2("Monday", strtotime("17.07.2022"), 0);
//echo "\n";
///echo time();

//getMondays(2001,2002, 4, 5);


//echo getdate()['weekday'];
//echo date("N", '22.07.2022');
//echo "\n";
//echo date("N");
//echo getdate('22.07.2022')['weekday'];
//var_dump($w);
?>
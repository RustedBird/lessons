<?php

echo 'Lesson5';


$array = [1, 2, 3, -4, 5, -6];

var_dump(getPositive($array, function ($items) {
    $result = [];

    foreach ($items as $value) {
        if (!($value % 2)) {
            $result[] = $value;
        }
    }
    return $result;
}));

var_dump(getPositive($array));


/**
 * @param array $array
 * @return array
 */

function getPositive(array $array, callable $callback = NULL)
{
    $result = [];
    foreach ($array as $value) {
        if ($value > 0) {
            $result[] = $value;
        }
    }

    if ($callback) {
        $result = call_user_func($callback, $result);
    }

    return $result;
}

$array = range(-50, 50);

var_dump(array_filter($array, function ($item, $key) {
    if ($item > 0 && !($item % 2) && !($key % 3)) {
        return true;
    }
}, ARRAY_FILTER_USE_BOTH));

$string = 'pseudopseudohypoparathyroidism';
var_dump($string);
$arrStr = str_split($string);

array_walk($arrStr, function (&$char, $key) {
    if (!($key % 2)) {
        $char = strtoupper($char);
    }
});

var_dump(implode($arrStr));


$array = ['Vadim', 'Max'];

array_walk($array, function (&$item) {
    $item = 'Hello ' . $item;
});
var_dump($array);
$numbers = [1, 5, 7, 8, -9, 3];

var_dump(array_filter($numbers, function ($item) {
    if ($item > 3 && $item % 2) {
        return true;
    }
}));

var_dump(rand(1, 5));

function makeUglyText () {

}




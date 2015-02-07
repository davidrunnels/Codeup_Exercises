<?php

$number1 = 10;
$number2 = 7;

$string1 = 'benjamin';
$string2 = 'franklin';

$array1 = ['banana', 'orange', 'mango', 'kiwi'];
$array2 = ['widget', 'wodget', 'wadget', 'wocket'];

function squareThis($number) {
    
    $numSquared = $number * $number;
    return $numSquared;
}

echo squareThis($number1) . PHP_EOL;

function upperCaseFirst($string) {

    $string = ucfirst($string);
    return $string;
}

echo upperCaseFirst($string1) . ' ' . upperCaseFirst($string2) . PHP_EOL;

function createArrayOfLetters($string) {
    $array = str_split($string);
    return $array;
}

print_r(createArrayOfLetters($string1));

function mergeTheseArrays($first_array, $second_array) {
    $mergedArray = array_merge($first_array, $second_array);
    return $mergedArray;
}

print_r(mergeTheseArrays($array1, $array2));

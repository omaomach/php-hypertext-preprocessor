<?php

$numbers = [1, 2, 3, 4, 5];

$square = function ($n) {
    return $n * $n . '<br>';
};

$squaredNumbers = array_map($square, $numbers);

// print_r($squaredNumbers);

function applyCallback($cb, $value)
{
    return $cb($value);
};

$double = function ($number) {
    return $number * 2;
};

$result = applyCallback($double, 7);
echo $result;

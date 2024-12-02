<?php

// function add($a, $b)
// {
//     return $a + $b;
// }

// echo add(1, 2);

$add = fn($a, $b) => $a + $b; // In PHP arrow functions are only meant to be one liners

$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(fn($num) => $num * $num, $numbers);

print_r($squaredNumbers);

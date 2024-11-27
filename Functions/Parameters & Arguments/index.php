<?php

function add($a = 1, $b = 1)
{
    return $a + $b;
}

// echo add(2, 4);
// echo add();

function addAll(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo addAll(1, 4, 5);

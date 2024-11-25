<?php

$x = 10;
$y = '9';

// var_dump($x == $y); // The double equal sign only test the value and not the type.
// var_dump($x === $y); // To test the type, we use the triple equal.
// var_dump($x != $y);
// var_dump($x <> $y); // This is the same as line 8
// var_dump($x !== $y);
// var_dump($x > $y); // Once more, please note that we are comparing the values and not the type.
// var_dump($x < $y);
// var_dump($x <= $y);
// var_dump($x >= $y);

$a = 10;
$b = 20;

// var_dump($a == 10 && $b == 20); // True if both are true
// var_dump($a == 10 and $b == 20); // True if both are true
// var_dump($a == 10 || $b == 20); // True if either are true
// var_dump($a == 10 or $b == 20); // True if either are true
// var_dump($a == 10 xor $b == 20); // True if one is true
var_dump(!($a == 5));

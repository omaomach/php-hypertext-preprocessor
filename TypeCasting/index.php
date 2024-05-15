<?php
$num1 = 5;
$num2 = 10;
$num3 = '20';
$num4 = 0;
$fruit = "Apple";
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit Conversion
$result = $num1 + $num2;
$result1 = $num1 + $num3; // int (string to int)
$result2 = $num3 + $num3; // int (string to int)
$result3 = $num1 . $num2; // string (int to string)
// $result4 = $num1 + $fruit;  // unsupported operand types (Error)
$result5 = $num1 + $bool1; // int (bool to int)
$result6 = $num2 + $null; // int (null to int)


// Explit Conversion
$result7 = (string) $num1;
$result8 = (int) $fruit;
$result9 = (int) $num3;
$result10 = (bool) $num2;
$result11 = (bool) $num4;

// echo $result7;
var_dump($result9);

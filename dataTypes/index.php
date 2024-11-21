<?php
// php is a loosely typed language
// String
$name = 'Joash Omao Machoka';
$name2 = "John Doe";

var_dump($name);
echo '<br />';

echo getType($name2);
echo '<br />';

// Integer
$age = 35;
var_dump($age);
echo '<br />';

// Float
$rating = 4.5;
var_dump($rating);
echo '<br />';

// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo '<br />';

// Array
$brothers = ['Joash', 'Joel', 'Joshua'];
var_dump($brothers);
echo '<br />';

// Object
$person = new stdClass();
var_dump($person);
echo '<br />';

// Null
$car = null;
var_dump($car);
echo '<br />';

// Resource
// $file = fopen('sample.txt', 'r');
// var_dump($file);

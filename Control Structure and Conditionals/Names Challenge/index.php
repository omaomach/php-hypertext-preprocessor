<?php

$names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elanor', 'Anna', 'Freddie', 'Adam'];

for ($i = 0; $i < count($names); $i++) {
    $firstLetter = substr($names[$i], 0, 1);

    if ($firstLetter === 'A') {
        continue;
    } else {
        echo strtolower(strrev($names[$i]));
    }

    echo '<br>';
}

// foreach ($names as $name) {
//     if ($name[0] === 'A') {
//         continue;
//     }

//     echo strtolower(strrev($name)) . '<br>';
// }

// for ($i = count($names) - 1; $i >= 0; $i--) {
//     $name = $names[$i];
//     if (substr($name, 0, 1) === 'A') {
//         continue;
//     }
//     $reversedName = strtolower(strrev($name));
//     echo $reversedName . '<br>';
// }

<?php

$number = 1;

// while ($number <= 10) {
//     if ($number % 2 == 0) {
//         echo $number . " Is even <br>";
//     } else {
//         echo $number . " Is Odd <br>";
//     }

//     $number++;
// };

// Break out of a loop
// for ($i = 0; $i <= 10; $i++) {
//     if ($i == 5) {
//         break; // The loop will break before we are able to echo 5 out.
//     }
//     echo $i . '<br>';
// }

// Skip and continue
// for ($i = 0; $i <= 10; $i++) {
//     if ($i == 5) {
//         continue; // This will print 1..10 skipping 5
//     }
//     echo $i . '<br>';
// }

$studentGrades = array(
    'John' => 75,
    'Jack' => 92,
    'Jill' => 100,
    'Joan' => 80
);

foreach ($studentGrades as $name => $grade) {
    if ($grade >= 90) {
        echo $name . ' has an excellent grade of ' . $grade . '<br>';
    };
}

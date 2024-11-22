<!-- # Array & Loop Challenges

## Challenge 1: Multiplication Table

Create a multiplication table using a nested `for` loop. The table should look like this:

```
1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
...
10 x 10 = 100
``` -->

<!-- <?php
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                echo  $i . ' x ' . $j . ' = ' . $i * $j . '<br>';
            };
        };
        ?> -->

<!-- ## Challenge 2: Get The Sum Of An Array

In the last challenge video, I had you get the sum of an array by manually adding the numbers together. In this challenge, I want you to use a `foreach` loop. You can also do this with a `for` loop for extra credit.

### Hints

- Use the append assignment operator (+=) to add each number to a variable. Then echo the variable after the loop. -->

<?php
$numbers = [1, 2, 3, 4, 5];
$sum = 0;

for ($i = 1; $i <= count($numbers); $i++) {
    $sum += $i;
};

// echo $sum;

// foreach ($numbers as $number) {
//     $sum += $number;
// }

// echo $sum;

?>

<!-- ## Challenge 3: Student Average Grade

1. Create a multidimensional array called $students that contains associative arrays for each student.
2. Each student's associative array should have keys for 'name' and 'grades'.
3. The 'grades' key should have an array of numeric grades for that student.
4. Use a foreach loop to iterate over each student in the $students array.
5. Calculate the average grade for each student and display their name and average grade. -->

<!-- ### Hints

- You can use the `array_sum()` function to get the sum of an array and the `count()` function to get the number of items in an array. Then divide the sum by the count to get the average. -->

<?php

$students = [
    [
        'name' => 'Joash',
        'grades' => [88, 45, 45]
    ],
    [
        'name' => 'Joel',
        'grades' => [90, 98, 100]
    ],
    [
        'name' => 'Joshua',
        'grades' => [66, 77, 88]
    ],

];

foreach ($students as $student) {
    $name = $student['name'] . "\n";
    $grades = $student['grades'];
    echo "Name: $name, Grade: " . implode(",", $grades) . "<br>";
    // 3. Calculate the average grade for each student
    $average = array_sum($grades) / count($grades);
    echo "Average Grade = $average <br>";
};

?>
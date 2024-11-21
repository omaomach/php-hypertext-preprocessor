<?php
$output = null;

$num1 = 18;
$num2 = 10;

$output1 = "$num1 + $num2 = " . $num1 + $num2;
$output2 = "$num1 - $num2 = " . $num1 - $num2;
$output3 = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
// $output = "$num1 % $num2 = " . $num1 % $num2; // REMAINDER

// Assignment Operator
$num3 = 10;
// $num3 = $num3 + 20;
// $num3 += 20;
// $num3 -= 20;
// $num3 /= 2;
// $output = $num3;

// Built in PHP Functions
// rand()
// $output = rand();
// $output = number_format(getrandmax());
// $output = rand(1, 20);

// round()
// $output = round(4.9); // this will return 5

// ceil()
// $output = ceil(3.1); // this will return  4 

// floor()
// $output = floor(6.7); this will return 6

// sqrt()
// $output = sqrt(64);

// pi()
// $output = pi();

// abs()
// $output = abs(-4.7);

// max() - get the highest value in a list or array of numbers
// $output = max(1, 2, 3, 4, 5, 6, 7);
// $output = max([1, 10, 3, 20, 5, 6, 7]);

// min() - get the lowest value in a list or array of numbers
// $output = min(1, 2, 3, 4, 5, 6, 7);
// $output = min([1, 10, 3, 20, 5, 6, 7]);

// number_format()
// $output = number_format(1234567.191234, 2, ".", ",");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body>
    <?= $output ?>
</body>

</html>
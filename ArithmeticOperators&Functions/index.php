<?php
$output = null;

$num1 = 20;
$num2 = 10;

$output1 = "$num1 + $num2 = " . $num1 + $num2;
$output2 = "$num1 - $num2 = " . $num1 - $num2;
$output3 = "$num1 * $num2 = " . $num1 * $num2;
$output4 = "$num1 / $num2 = " . $num1 / $num2;
$output5 = "$num1 % $num2 = " . $num1 % $num2; // REMAINDER

// Assignment Operator
$num3 = 10;
// $num3 = $num3 + 20;
// $num3 += 20;
// $num3 -= 20;
// $num3 /= 2;
$output6 = $num3;

// Built in PHP Functions
// rand()
$output7 = rand();
$output8 = number_format(getrandmax());
$output9 = rand(1, 20);

// round()
$output9 = round(4.9);

// ceil()
$output9 = ceil(3.1);

// floor()
$output9 = floor(6.7);

// sqrt()
$output9 = sqrt(64);

// pi()
$output9 = pi();

// abs()
$output9 = abs(-4.7);

// max() - get the highest value in a list or array of numbers
$output9 = max(1, 2, 3, 4, 5, 6, 7);
$output9 = max([1, 10, 3, 20, 5, 6, 7]);

// min() - get the lowest value in a list or array of numbers
$output9 = min(1, 2, 3, 4, 5, 6, 7);
$output9 = min([1, 10, 3, 20, 5, 6, 7]);

// number_format()
$output9 = number_format(1234567.191234, 2, ".", ",");

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
    <?= $output9 ?>
</body>

</html>
<?php
$output = null;

// Challenge 1: Sum of an array
$numbers = [2, 3, 6, 4, 9, 16, 46, 37, 99];

$sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4] + $numbers[5] + $numbers[6] + $numbers[7] + $numbers[8];

$count = count($numbers);

echo "The sum of the $count numbers is: $sum <br />";
echo 'The sum of the ' . $count . ' numbers is: ' . $sum;

// Challenge 2: Colors array
$colors = ['red', 'blue', 'green', 'yellow'];
array_reverse($colors);
$colors = array_merge($colors, ['purple', 'orange']);
array_splice($colors, 1, 0, "pink");
array_pop($colors);

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
    <h2 class="text-xl font-semibold my-4">User Array</h2>
    <p>
    <pre>
            <?php print_r($colors) ?>
        </pre>
    </p>
</body>

</html>
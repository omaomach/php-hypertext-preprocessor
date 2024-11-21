<?php
$output = null;

// Challenge 1: Sum of an array
$numbers = [2, 3, 6, 4, 9, 16, 46, 37, 99];

// $sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4] + $numbers[5] + $numbers[6] + $numbers[7] + $numbers[8];
$sum = array_sum($numbers);

$count = count($numbers);

echo "The sum of the $count numbers is: $sum <br />";
echo 'The sum of the ' . $count . ' numbers is: ' . $sum;

// Challenge 2: Colors array
$colors = ['red', 'blue', 'green', 'yellow'];
$colors = array_reverse($colors);
// array_push($colors, 'purple');
// $colors[] = 'orange';
$colors = array_merge($colors, ['purple', 'orange']);
array_splice($colors, 1, 1, "pink");
array_pop($colors);

echo '<h3>Job Listings</h3>';

$listings = [
    [
        'id' => 1,
        'job_title' => 'PHP Developer',
        'company' => 'ComrAid',
        'contact_email' => 'joash@gmail.com',
        'contact_phone' => '0728748441',
        'skills' => ['PHP, MySQL', 'JS']
    ],
    [
        'id' => 2,
        'job_title' => 'Web Designer',
        'company' => 'ComrAid Shop',
        'contact_email' => 'jane@gmail.com',
        'contact_phone' => '0795570188',
        'skills' => ['Photoshop, Illustrator', 'CSS']
    ],
    [
        'id' => 3,
        'job_title' => 'PHP Developer',
        'company' => 'ComrAid',
        'contact_email' => 'joash@gmail.com',
        'contact_phone' => '0728748441',
        'skills' => ['PHP', 'MySQL', 'JS']
    ]
];

array_push($listings, [
    'job_title' => 'Graphic Designer',
    'company' => 'ComrAid Shop',
    'contact_email' => 'jane@gmail.com',
    'contact_phone' => '0795570188',
    'skills' => ['Photoshop, Illustrator', 'CSS']
]);

// print_r($listings);
// echo $listings[1]['job_title'];
echo $listings[2]['skills'][0]

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
            <?= print_r($listings) ?>
        </pre>
    </p>
</body>

</html>
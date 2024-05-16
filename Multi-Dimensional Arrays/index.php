<?php
$output = null;

$fruits = [
    ['Apple', 'Red'],
    ['Orange', 'Orange'],
    ['Banana', 'yellow']
];

$output = $fruits[0][1];

$fruits[] = ['Grape', 'Purple'];

$users = [
    [
        'name' => 'Joash',
        'email' => 'joashmachoka@iball.uk',
        'password' => '12345678',
    ],
    [
        'name' => 'Mary',
        'email' => 'mary@iball.uk',
        'password' => '123678',
    ],
    [
        'name' => 'Joel',
        'email' => 'joel@iball.uk',
        'password' => '23678567',
    ]
];

$users[] = [
    'name' => 'Gloria',
    'email' => 'gloria@gmail.com',
    'password' => 'gloria',
];

array_push($users, [
    'name' => 'Faith',
    'email' => 'faith@gmail.com',
    'password' => 'mwabe',
]);

unset($users[0]);

array_pop($users);
array_shift($users);

$output = $users[0]['name'];

$output = count($users);

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
            <?php print_r($users) ?>
        </pre>
    </p>
</body>

</html>
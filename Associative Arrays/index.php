<?php
$output = null;

$user = [
    'name' => 'Joash',
    'email' => 'joashmachoka@iball.uk',
    'password' => '12345678',
    'hobbies' => ['Boxing', 'exercising', 'coding']
];

// echo $user;
// echo '<pre>';
// var_dump($user);
// echo '</pre>';

// $output = $user['name'];
// $output = $user['email'];

// $output = print_r($user['hobbies']);
// $output = $user['hobbies'][2];
$user['address'] = 'Kahawa Sukari';

// print_r($user)

// unset($user['address']);

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
            <?php print_r($user) ?>
            <!-- <?php $output ?> -->
        </pre>
    </p>
</body>

</html>
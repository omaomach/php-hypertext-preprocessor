<?php
// Basic For Loop
// for ($i = 0; $i <= 10; $i++) {
//     echo $i . '<br />';
// }

// Basic While Loop
// $i = 0;

// while ($i < 10) {
//     echo $i . '<br />';
//     $i++;
// }

// Basic Do-While
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 10);

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
    <h2 class="text-xl font-semibold my-4">Basic Loops</h2>
    <ul>
        <!-- <?php for ($i = 0; $i <= 10; $i++): ?>
            <li>Number: <?= $i ?></li>
        <?php endfor; ?> -->
        <?php $i = 0;
        while ($i < 10): ?>
            <li>Number: <?= $i ?></li>
        <?php $i++;
        endwhile; ?>
    </ul>
</body>

</html>
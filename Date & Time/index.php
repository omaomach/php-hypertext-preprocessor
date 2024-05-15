<?php
$title = "Learn PHP From The Start";

// - `Y` - The year
// - `m` - The month
// - `d` - The day
// - `D` - The day of the week short name
// - `l` - The full day of the week name
// - `h` - The hour
// - `i` - The minute 
// - `s` - The second 
// - `a` - AM/PM

// Get year
$output = date('Y');

// Get year with timestamp
$output = date('Y', 936345600);

// Get timestamp from strtotime
$output = date('Y', strtotime('1999-09-01'));

// Get Month number from strtotime
$output = date('m', strtotime('1999-09-01'));

// Get Month name from strtotime
$output = date('M', strtotime('1999-09-01'));

// Get Current month
$output = date('M');

// Get day
$output = date('d');
$output = date('D');
$output = date('l');

// Get Year, Month and Day
$output = date('Y-m-d');

// Get Month, Day and Year
$output = date('m-d-Y');

// Get hour
$output = date('h');

// Get min
$output = date('i');

// Get second
$output = date('s');

// Get am/pm
$output = date('a');

// Put it all together
$output = date('Y-m-d  h:i:s a')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <?= $output ?>
        </div>
    </header>
</body>

</html>
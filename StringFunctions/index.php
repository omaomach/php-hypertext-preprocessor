<?php
$title = "Learn PHP From The Start";
$output = null;
$string = "Hello World";

// strlen()
$output = strlen($string);

// str_word_count()
$output = str_word_count($string);

// strpos() - get index at which the word starts
$output = strpos($string, "World");

// Get specific character by index
$output = $string[4];

// substr()
$output = substr($string, 6, 5);

// str_replace()
$output = str_replace("World", "Universe", $string);

// strtolower()
$output = strtolower($string);

// strtoupper()
$output = strtoupper($string);

// ucwords() - make the first letters of the word uppercase
$output = ucwords($string);

// trim()
$output = trim(' Hello World ');

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
<?php
// A switch statement helps you test the value of an expression against different cases.
// If the value matches a case, that code will be executed. If it doent match any case, a default will be executed.
// Its a great alternative to an if, elseif if you have a bunch of different conditions

$dayOfWeek = date('l');

switch ($dayOfWeek) {
    case 'Monday':
        $message = 'Monday Blues';
        $color = 'blue';
        break;
    case 'Tuesday':
        $message = 'At least it\'s not Monday';
        $color = 'green';
        break;
    case 'Wednesday':
        $message = 'Hump Day';
        $color = 'orange';
        break;
    case 'Thursday':
        $message = 'One more day till Friday';
        $color = 'red';
        break;
    case 'Friday':
        $message = 'TGIF';
        $color = 'purple';
        break;
    case 'Saturday':
        $message = 'Have a nice weekend';
        $color = 'yellow';
        break;
    case 'Sunday':
        $message = 'Have a nice weekend';
        $color = 'yellow';
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Day Is It?</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: <?= $color ?>;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <!-- <h1><?= $message ?></h1> -->
    <h1><?= strtoupper($message) ?></h1>
</body>

</html>
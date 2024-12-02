<?php

// Global Scope
$name = 'Alice';

function sayHello()
{
    global $name;

    // Local Scope
    $name = 'Joel';
    echo 'Hello ' . $name;
}

// echo $name;

sayHello();

// echo $name;

// function sayGoodbye()
// {
//     $names = ['Jack', 'Jill'];
//     echo 'Goodbye ' . $names[0];
// }

// sayGoodbye();

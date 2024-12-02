<?php

declare(strict_types=1);

function getSum(int $a, int $b): int // We have specified the type for arguments to be given and the type for the return value
{
    return $a + $b;
}

echo getSum(1, 1), '<br>';

function greeting(string $name): void
{
    echo 'Hello ' . $name;
}

greeting('John');

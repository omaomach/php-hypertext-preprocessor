<?php

$age = 16;

// If statement
// if ($age >= 21) {
//     echo 'You are old enough to drink';
// }

// If-Else

// if ($age >= 21) {
//     echo 'You are old enough to drink';
// } else {
//     echo 'You are not old enough to drink';
// };

// Nested if statement
// if ($age >= 21) {
//     echo 'You are old enough to drink';
// } else {
//     if ($age >= 18) {
//         echo 'You are old enough to vote';
//     } else {
//         echo 'You are not old enough to vote or drink';
//     };
// };

// If-Else-If
if ($age >= 21) {
    echo 'You are old enough to drink and vote in Kenya';
} else if ($age >= 18) {
    echo 'You are old enough to vote in the Kenya';
} else {
    echo 'You are not old enough to vote or drink';
}

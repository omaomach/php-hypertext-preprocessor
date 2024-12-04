<?php
// Challenge 1: Fahrenheit to Celsius ///////////////////////////////////////////////////

// EASY //

// function fahrenheitToCelsius($fahrenheit)
// {
//     $celsius = ($fahrenheit - 32) * 5 / 9;
//     return $fahrenheit . 'F = ' . $celsius . '°C';
// }

// $fahrenheitToCelsius = fn($fahrenheit) => $fahrenheit . 'F = ' . (($fahrenheit - 32) * 5 / 9);

// echo $fahrenheitToCelsius(68);

// HARDER //
// Example

// $baseTemp = 32;

// $fahrenheitToCelsius = fn($fahrenheit, $baseTemp) => $fahrenheit . '°F = ' . (($fahrenheit - $baseTemp) * 5 / 9) . '°C';

// echo $fahrenheitToCelsius(68, $baseTemp);


//  Solutions ////////////////////////////////////////////////////

// EASY //

$fahrenheitToCelsius = fn($f) => ($f - 32) * 5 / 9;
$degToConvert = 70;
// echo $degToConvert . '&degF = ' . $fahrenheitToCelsius($degToConvert) . '&degC';

// HARDER //
// $baseTemp = 32;
// $fahrenheitToCelsius = function ($f) use ($baseTemp) {
//     return ($f - $baseTemp) * 5 / 9;
// };
// $degToConvert = 68;

// echo $degToConvert . '&degF = ' . $fahrenheitToCelsius($degToConvert) . '&degC';


// Challenge 2: Print Names In Uppercase //////////////////////////////////////////

$names = ['Joash', 'Joel', 'Faith', 'Gloria', 'Joshua'];

function printNamesInUppercase($names)
{
    foreach ($names as $name) {
        $uppercaseName = strtoupper($name);
        echo $uppercaseName . '<br>';
    }
}

// printNamesInUppercase($names);

// Challenge 3: Find the longest word /////////////////////////////////////////////

$sentence = 'The quick brown fox jumped over the lazy dog';

// function findLongestWord($sentence)
// {
//     $words = explode(" ", $sentence);
//     $longestWord = $words[0];

//     foreach ($words as $word) {
//         if (strlen($word) > strlen($longestWord)) {
//             $longestWord = $word;
//         }
//     }
//     return ucfirst($longestWord); // I have optionally capitalized the first letter of the longest word.
// }

// echo findLongestWord($sentence);


// SOLUTION  ////////////////////////////////////////////////////////////////////////
function findLongestWord($sentence)
{
    // Split the sentence into an array of words
    $words = explode(' ', $sentence);
    // Initialize the longest word array
    $longestWord = '';

    // Loop through the words array
    foreach ($words as $word) {
        // Trim the word to remove any whitespace
        $word = trim($word);
        // Check if the current word is longer than the longest
        if (strlen($word) > strlen($longestWord) || $longestWord === '') {
            $longestWord = $word;
        }
    }

    return $longestWord;
}

echo findLongestWord($sentence);

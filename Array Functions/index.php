<?php
$output = null;
$id = [10, 22, 15, 23, 17];
$users = ['user3', 'user2', 'user1'];

// print_r() - This function will return the entire array

// count() - count the number of elements in an array
$output = count($id);

// sort() - sorts array elements in descending order, strings are sorted lexicographically
sort($id);
sort($users);

// rsort() - sorts array elements in ascending order
rsort($users);
rsort($id);

// array_push() - add an element at the end of an array
array_push($id, 200);
array_push($users, "user4");

// array_pop() - remove an element from the end of an array
array_pop($id);
array_pop($users);

// array_shift() - remove an element from the beginning of an array
array_shift($id);
array_shift($users);

// array_unshift() - and an element to the beginning of an array
array_unshift($id, 37);
array_unshift($users, 'user5');

// array_slice() - this function returns part of the array as a new array
$id2 = array_slice($id, 1, 3);
// var_dump($id2);

// // array_splice() - 
// array_splice($id, 1, 1, "New ID");
array_splice($users, 0, 1, "New User");

// array_sum()
$output = 'Sum of IDs: ' . array_sum($id);

// array_search()
$output = "User 2 is at index: " . array_search("user2", $users);

array_push($users, "user3");

// in_array()
$output = "User 3 Exists: " . in_array("user3", $users);
var_dump(in_array("user3", $users));

// explode()
$tags = 'code,with,joash';
$tagsArr = explode(',', $tags);
// var_dump($tagsArr);

// implode
$output = implode(', ', $users)

// unset()

// PHP documentation ("https://www.php.net/manual/en/ref.array.php").

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>

<body>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <p class="text-xl"> <?= $output ?> </p>
            <h2 class="text-xl font-semi-bold my-4">ID Array:</h2>
            <p>
            <pre>
                    <?php print_r($id); ?>
                </pre>
            </p>
            <h2 class="text-xl font-semi-bold my-4">Users Array:</h2>
            <p>
            <pre>
                    <?php print_r($users); ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>
<!-- # Array & Loop Challenges

## Challenge 1: Multiplication Table

Create a multiplication table using a nested `for` loop. The table should look like this:

```
1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
...
10 x 10 = 100
``` -->

<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo  $i . ' x ' . $j . ' = ' . $i * $j . '<br>';
    };
};
?>
<?php
//This example decrements a variable value on each iteration of the loop and the counter increments until it reaches 10 when the evaluation is false and the loop ends.
$a=0;
$b=100;

while ($a < 10) {
    $b--;
    $a++;
    if ($a==2) break;
}
echo "loop stopped at a = $a and b = $b";
?>
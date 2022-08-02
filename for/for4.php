<?php

$sum = 0;
$g = 5;

for ($i = 1; $i <= 100; $i++) {
    $sum = $sum + $g;
}

echo $sum;

$f = 'xx';
$string = '';

for ($j = 1; $j <= 5; $j++) {
    $string = $string . $f;
}

echo "$string <br>";

<?php
$a = 1000;
$b = 2;
$x = 0;

while ($a >= 50) {
    $a = $a / $b;
    $x++;
}

echo $x;
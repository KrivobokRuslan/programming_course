<?php
$a = 1000;
$x = $a;

for ($a = 1000; $a >= 50; $x++) {
    $a /= 2;
}

echo $x;
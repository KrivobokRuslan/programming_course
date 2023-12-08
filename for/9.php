<?php
$x = 1000;

for ($i = 1; true; $i++) {
    $x = $x / 2;

    if ($x < 50) {
        break;
    }
}

echo $i;
<?php
$n = 7;
$factorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}

echo $factorial;
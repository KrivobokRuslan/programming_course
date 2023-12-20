<?php

function sum(int $a = 2,int $x = 5) {
    $b = 0;
    for ($i = $a; $i <= $x; $i++) {
        $b += $i;
    }

    echo $b;
}

sum();
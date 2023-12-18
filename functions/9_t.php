<?php

function black(int $a, int $b) {
    $x = 0;
    for ($i = $a; $i >= $b; $x++) {
         $i /= 2;
    }

    echo $x;
}

black(2000, 50);
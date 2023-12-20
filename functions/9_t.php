<?php

function black(int $a = 1000, int $b= 50) {
    $x = 0;
    for ($i = $a; $i >= $b; $x++) {
         $i /= 2;
    }

    echo $x;
}

black();
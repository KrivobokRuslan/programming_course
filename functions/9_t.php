<?php

function black(int $a, int $b) {
    $x = 0;
    for ($i = $a; $i >= $b; $x++) {
         $a /= 2;
    }
}

black(1000, 50);
<?php

function red($a, $x) {
    $b = 0;
    for ($i = $a; $i <= $x; $i++;) {
        $b += $i;
    }
}

red(2, 5);
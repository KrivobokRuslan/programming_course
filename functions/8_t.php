<?php

function red($a, $b) {
    $x =0;
    for ($i = $a; $i >=$b; $i--) {
        $x += $i;
    }

    echo $x;
}

red(5, -5);
<?php


function vas ($a, $b) {
    $result = 0;

    for ($i = 1; $i <= $b; $i++) {
        $result = $result + $a;
    }

    echo $result;
}

vas (7, 100);
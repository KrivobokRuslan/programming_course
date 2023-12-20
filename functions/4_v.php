<?php


function printNumberFromNtoM(int $a, int $b) {
    $result = 0;

    for ($i = $a; $i <= $b; $i++) {
        $result = $result + $a;
    }

    echo $result;
}

printNumberFromNtoM(7, 100);
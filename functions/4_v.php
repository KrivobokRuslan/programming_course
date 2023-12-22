<?php


function printNumberFromNtoM(int $a = 7, int $b = 100) {
    $result = 0;

    for ($i = $a; $i <= $b; $i++) {
        $result = $result + $a;
    }

    echo $result;
}

printNumberFromNtoM();
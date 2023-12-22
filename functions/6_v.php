<?php

function printNumbersFromNtoM(int $a = 59) {
    for ($i = 1; $i <= $a; $i++) {
        $result = ' ';

        for ($y = 1; $y <= $i; $y++) {
            $result = $result . 'xx';
        }

        echo $result . '<br>';
    }
}
printNumbersFromNtoM();


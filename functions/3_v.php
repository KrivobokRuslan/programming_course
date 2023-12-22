<?php

function printNumbersFromNtoM(int $a = 2, int $b = 100): void {
    for ($i = $a; $i <= $b; $i +=2) {
        echo $i;
    }
}
printNumbersFromNtoM();
<?php

function printNumbersFromNtoM(int $a, int $b): void {
    for ($i = $a; $i <= $b; $i +=2) {
        echo $i;
    }
}
printNumbersFromNtoM(1, 20);
<?php
function printNumbersFromNtoM(int $n = 1, int $m = 100): void
{
    for ($i = $n; $i <= $m; $i++) {
        echo $i . '<br>';
    }
}
printNumbersFromNtoM();
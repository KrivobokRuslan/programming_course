<?php
function printNumbersFromNtoM(int $n, int $m) {
    for ($i = $n; $i <= $m; $i++) {
        echo $i . '<br>';
    }
}
printNumbersFromNtoM(1, 45);
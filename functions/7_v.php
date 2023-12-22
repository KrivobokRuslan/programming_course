<?php

function sumFromNtoM(int $a = 5, int $b = 10): int {
    $result = 0;
    for ($i = $a; $i <= $b; $i++) {
        $result += $i;
    }

    return $result;
}

echo sumFromNtoM();
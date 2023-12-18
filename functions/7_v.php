<?php

function sumFromNtoM(int $a, int $b): int {
    $result = 0;
    for ($i = $a; $i <= $b; $i++) {
        $result += $i;
    }

    return $result;
}

echo sumFromNtoM(5, 10);
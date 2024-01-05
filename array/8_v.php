<?php

function notEvenNumbers(array $arr): int {
    $sum = 0;

    for ($i = 0; $i < count($arr); $i++); {
        if ($i % 2 !== 0) {
            $sum += $arr[$i];
        }
    }

    return $sum;
}

echo notEvenNumbers([10,4,5,6,8,34,7,5]);


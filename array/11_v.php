<?php

function sumOfSquares(array $arr): int {
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum = $sum + ($arr[$i] * $arr[$i]);
    }
    return $sum;
}
echo sumOfSquares([5,10]);
<?php

function squareArray(array $arr): float {
    $sumSquare = 0;
    foreach ($arr as $val) {
       $sumSquare += $val * $val;
    }

    return $sumSquare;
}

echo squareArray([2,2,2]);
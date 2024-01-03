<?php

function sumOfElements(array $arr) {
    $sum = 0;
    foreach ($arr as $a) {
        $sum = $sum + $a;
    }
    return $sum;
}
echo sumOfElements([1, 2, 3]);
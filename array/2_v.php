<?php

function printArray(array $arr): int {
    $sum = 1;
    for ($i = 0; $i < count($arr); $i++) {
         $sum *= $arr[$i];
    }
    return $sum;
}
    $x = [2,4];
    echo printArray($x); 
    echo "<br>";
    echo array_product($x);
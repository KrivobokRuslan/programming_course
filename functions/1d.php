<?php
//1) сделать функцию, которая считает сумму элементов массива

function sum(array $array){
    $s = 0;
    for ($i = 0; $i < count($array); $i++) {
        $s = $s + $array[$i];
    }
    return $s;
}

$e = [2, 5, 6, 7];

echo sum($e);
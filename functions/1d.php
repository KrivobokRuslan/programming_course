<?php
//1) сделать функцию, которая считает сумму элементов массива

function sum($d){
        $s = 0;
    for ($i = 0; $i < count($d); $i++) {
        $s = $s + $d[$i];
    }
    return $s;
}

$e = [2, 5, 6, 7];

echo sum($e);
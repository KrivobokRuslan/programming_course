<?php
//5) _array_flip — Меняет местами ключи с их значениями в массиве (['first' => 6, 'second' => 7, 'third' => 8,
//* 'fourth' => 9]; // => [6 => 'first', 7 => 'second', 8 => 'third', 9 => 'fourth'])
function _fliparray(array $array): array {
    $result = [];
    foreach ($array as $key => $value){
        $value = $k1;
        $key = $v1;
        $result = $newarray[$k1 => $v1];
    }

    return $result;
}

$arr = ['first' => 6, 'second' => 7, 'third' => 8, 'fourth' => 9];
var_dump(_fliparray($arr));
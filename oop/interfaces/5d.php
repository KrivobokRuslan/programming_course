<?php
//Ваше задание — создать массив, наполнить его случайными значениями (можно использовать функцию rand),
// найти максимальное и минимальное значение массива и поменять их местами.
$array = [];

for ($i = 0; $i < 20; $i++) {
    $array[] = rand(0, 100);
}

$max = $array[0];
$min = $array[0];

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $max) {
        $max = $i;
    }

    if ($array[$i] < $min) {
        $min = $i;
    }
}

$maxValue = $array[$max];
$minValue = $array[$min];

$array[$max] = $minValue;
$array[$min] = $maxValue;

var_dump([$max, $min]);
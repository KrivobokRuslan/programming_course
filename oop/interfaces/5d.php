<?php
//Ваше задание — создать массив, наполнить его случайными значениями (можно использовать функцию rand),
// найти максимальное и минимальное значение массива и поменять их местами.


function min_n_max ($array)  {
    $array = [];
    $array[] = rand(0, 100);
for ($i = 0; $i < 20; $i++) {

    $max = $array[0];
    $min = $array[0];
}
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

}
echo min_n_max($array);
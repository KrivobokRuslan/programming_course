<?php
// 11 дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.

$array = [1,2,3,4,5];
$sum = 0;

for ($i = 0; $i < count($array); $i++) {
    $sum += $array[$i] * $array[$i];
}

echo $sum . '<br>';
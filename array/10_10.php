<?php
// 10 найти минимальное значение элементов массива

$minArray = [45,65,87,24,98,45,76,12,32,51];
$min = $minArray[0];

for ($i = 1; $i < count($minArray); $i++) {
    if ($min > $minArray[$i]) {
        $min = $minArray[$i];
    }
}

echo $min . '<br>';
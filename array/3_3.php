<?php
// 3 среднее арефметическое элементов массива
$arrayForMedium = [1, 2, 3, 4, 5];
$sum = 0;

for ($i = 0; $i < count($arrayForMedium); $i++) {
    $sum += $arrayForMedium[$i];
}

echo 'Medium is ' . $sum / count($arrayForMedium) . '<br>';
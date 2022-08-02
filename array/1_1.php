<?php
// 1 сумма элементов массива
$arrayForSum = [34, 56, 21, 76, 87];
$sum = 0;

for ($i = 0; $i < count($arrayForSum); $i++) {
    $sum += $arrayForSum[$i];
}

echo 'Sum is ' . $sum . '<br>';
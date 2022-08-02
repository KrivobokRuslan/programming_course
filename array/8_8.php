<?php
// 8 вывести сумму нечетный элементов массива
$oddSumArray = [12, 13, 14, 15, 16, 17, 18, 19];
$sum = 0;

for ($i = 0; $i < count($oddSumArray); $i++) {
    if ($oddSumArray[$i] % 2 != 0) {
        $sum += $oddSumArray[$i];
    }
}

echo $sum;
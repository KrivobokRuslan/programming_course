<?php
//8 вывести сумму нечетный элементов массива

$arr = [3, 4, 5, 6, 7, 8, 9, 10, 11];
$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 != 0) {
        $sum += $arr[$i];
    }
}
echo $sum;
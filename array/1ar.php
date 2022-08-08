<?php
// 1 сумма элементов массива

$arr = [40, 45, 47, 56, 70, 35];
$sum = 0;

for ($i = 0; $i < count($arr); $i++){
    $sum += $arr[$i];
}
echo $sum;
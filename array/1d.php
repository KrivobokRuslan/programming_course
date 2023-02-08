<?php
// 1 вернуть сумма элементов массива
$a = [2, 3, 4, 5];
$sum = 0;

for ($i = 0; $i < count ($a); $i++ ) {
    $sum = $sum + $a[$i];
} echo $sum;
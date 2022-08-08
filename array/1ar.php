<?php
// 1 сумма элементов массива
include "../functions.php";
$arr = [1, 2, 3, 4, 5, 6];
$sum = 0;

for ($i = 0; $i < count($arr); $i++){
    $sum = $sum + $arr[$i];
}
echo $sum;
<?php
//7 вывести все четный элементы массива

$arr = [7, 6, 45, 33, 22, 5, 4, 2, 11, 24, 87];

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 == 0) {
        echo $arr[$i] . '<br>';
    }
}

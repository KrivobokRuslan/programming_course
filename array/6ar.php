<?php
//6 вывести каждый 3-и элемент массива

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

for ($i = 0; $i < count($arr); $i = $i + 3){
echo $arr[$i];}
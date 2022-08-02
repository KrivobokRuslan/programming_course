<?php
// 6 вывести каждый 3-и элемент массива
$everyThirdArray = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

for ($i = 2; $i < count($everyThirdArray); $i = $i + 3) {
    echo $everyThirdArray[$i] . '<br>';
}
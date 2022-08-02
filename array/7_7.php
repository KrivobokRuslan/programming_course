<?php
// 7 вывести все четный элементы массива
$evenArray = [12,13,14,15,16,17,18,19];

for ($i = 0; $i < count($evenArray); $i++) {
    if ($evenArray[$i] % 2 == 0) {
        echo $evenArray[$i] . '<br>';
    }
}
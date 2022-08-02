<?php
// 5 вывести массив в обратной последовательности
$reverseArray = [5, 3, 7, 2, 9];

for ($i = count($reverseArray) - 1; $i >= 0; $i--) {
    echo $reverseArray[$i] . '<br>';
}
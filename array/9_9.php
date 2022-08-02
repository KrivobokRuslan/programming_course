<?php
// 9 найти значение максимального элемента массива

$maxArray = [45,65,87,24,98,45,76,12,32,51];
$max = $maxArray[0];

for ($i = 1; $i < count($maxArray); $i++) {
    if ($max < $maxArray[$i]) {
        $max = $maxArray[$i];
    }
}

echo $max . '<br>';
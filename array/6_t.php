<?php

function everyThirdElement(array $arr): int {
    $a = count($arr);
    for ($i = 1; $i < $a; $i+=3) {
        echo $arr[$i];
    }
}

$number = [1,2,3,4,5,6,7,8,9,10];
everyThirdElement($number);
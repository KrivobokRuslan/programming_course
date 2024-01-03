<?php

function everyOtherElement(array $arr) {
    $i = 1;
    foreach ($arr as $k => $v) {
        if ($i % 2 == 0) {
            echo $v;
        }
        $i++;
    }
}

$number = [2,5,7,5,9,1,0];
everyOtherElement($number);
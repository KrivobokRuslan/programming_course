<?php

function everyOtherElement(array $arr) {
    $y = 0;
    foreach ($arr as $n => $m) {
        if ($y % 2 == 0) {
            echo $m;
        }
        $y++;
    }
}
$number = [0,2,4,6,8,10,12,14];
everyOtherElement($number);
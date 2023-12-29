<?php

function minArray(array $arr) {
    $min= 0;
    foreach ($arr as $val) {
        if ($min < $val) {
            echo $min;
        }
    }
    return $min;
}

echo minArray([1,3,56,8,5,4,0,6]);
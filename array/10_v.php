<?php

function minArray(array $arr) {
    $min = 1;
    foreach ($arr as $val) {
     if ($min < $val) {
       $min = $val;
    }
    }
    return $min;
}
$number = [3,45,3,7,0];
$result = minArray($number);
echo $result;
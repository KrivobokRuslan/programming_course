<?php

function sumOfSquares(array $arr) {
    $sum = 0;
    foreach ($arr as $element) {
      $sum = $element * $element;
       
    }
    return $sum;
}

$number = [2,4,6,3,6,9];
$result = sumOfSquares($number);
echo $result;

<?php

function multiplicationArray() {
    $number = [2,5,3,9];
    $result = ($number[0] * $number[1] + $number[2] * $number[3]);
    echo $result;
}

multiplicationArray();
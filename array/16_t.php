<?php

function SumArray(array $number): int {
    return array_sum($number);
}


echo SumArray([1,2,3]);
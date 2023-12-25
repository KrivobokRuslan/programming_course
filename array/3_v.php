<?php

function sumArray(array $arr): float {
    return array_sum($arr) / count($arr);
}

echo sumArray([2,4,4]);
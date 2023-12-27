<?php
function arraySum(array $arr): int
{
    $sum = 0;

    foreach ($arr as $k => $v) {
        $sum += $v;
    }

    return $sum;
}

function arrayCount(array $arr): int
{
    $i = 0;

    foreach ($arr as $k => $v) {
        $i++;
    }

    return $i;
}

function ryd(array $a): float {
    return arraySum($a) / arrayCount($a);
}

$a= [2,4,6,4,5];
echo ryd($a);
<?php
function reverseArray(array $arr): int{
    $a = array_reverse($arr);
    return $a;
}

$b = [1,5,4,76];

$x = reverseArray($b);

echo implode($x);
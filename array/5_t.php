<?php
function reverseArray(array $arr): array {
    $a = array_reverse($arr);
    return $a;
}

$b = [1,5,4,76];

$x = reverseArray($b);

echo implode('', $x);
<?php
// 3) Сделайте функцию, которая отнимает от первого числа второе и делит на третье.
function _abc(int $a, int $b, int $c) {//int?
    $result = ($a - $b)/$c;
    return $result;
}

echo _abc(10, 4, 2);
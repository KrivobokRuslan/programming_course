<?php
// 3) Сделайте функцию, которая отнимает от первого числа второе и делит на третье.
function _abc(int $a, int $b, int $c): float {
    return ($a - $b)/$c;
}

echo _abc(10, 4, 2);
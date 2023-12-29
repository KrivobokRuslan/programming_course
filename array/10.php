<?php
function findMinElement(array $a): int {
    $min = $a[0];

    foreach ($a as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }

    return $min;
}

echo findMinElement([3, 5, 6, 7, 1]);

// $min = 3;
// 1 iteration
// $min = 3;
// $value = 3
// 3 < 3

// 2 iteration
// $min = 3;
// $value = 5
// 5 < 3

// 3 iteration
// $value = 6
// $min = 3;
// 6 < 3

// 4 iteration
// $value = 7
// $min = 3;
// 7 < 3

// 4 iteration
// $value = 1
// $min = 3;
// 1 < 3
// $min = 1;

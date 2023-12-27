<?php
function maxArray(array $arr): int {
    $max = 0;

    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }

    return $max;
}

echo maxArray([
    0 => 5,
    1 => 4,
    2 => 7,
    3 => 2,
    4 => 6,
    5 => 9,
    6 => 5,
    7 => 10,
    8 => 3,
    9 => 6
]);

// 1 iteration
// $max = 0
// $value = 5
// 5 > 0
// $max = 5

// 2 iteration
// $max = 5
// $value = 4
// 4 > 5

// 3 iteration
// $max = 5
// $value = 7
// 7 > 5
// $max = 7;

// 4 iteration
// $max = 7
// $value = 2
// 2 > 7

// 5 iteration
// ...
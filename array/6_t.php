<?php
function everyThirdElement(array $arr): void {
    $i = 1;

    foreach ($arr as $k => $v) {
        if ($i % 3 == 0) {
            echo $v;
        }

        $i++;
    }
}

$number = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 4,
    'five' => 5,
    'six' => 6,
    'seven' => 7,
    'eight' => 8,
    'nine' => 9,
    'ten' => 10
];
everyThirdElement($number);

/**
 *  1 iteration
 *  $i = 1;
 *  1 % 3 == 2
 *  $i = 1 + 1
 *
 * 2 iteration
 *  $i = 2
 * 2 % 3 == 1
 * $i = 2 + 1
 *
 *
 * 3 iteration
 * $i = 3
 * 3 % 3 == 0
 * echo $v;
 * $i = 3 + 1
 */
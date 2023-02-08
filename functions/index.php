<?php
// 1 написать функцию, которая считает сумму элементов массива arraySum()
//

function _count(array $data): int {
    $i = 0;

    foreach ($data as $item) {
        $i++;
    }

    return $i;
}

function __count(array $data): int {
    for ($i = 0; true; $i++) {
        if (isset($data[$i])) {
            continue;
        } else {
            break;
        }
    }

    return $i;
}

echo __count([2,3,4]);

function sum(int $x = 1, int $y = 1): int {
    return $x + $y;
}

echo sum();
echo sum(2);
echo sum(2,3);
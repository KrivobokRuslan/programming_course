<?php

function numbers(int $n, int $m): array {
    $result = [];

    for ($i = $n; $i <= $m; $i++) {
        $result[] = $i;
    }

    return $result;
}

echo '<pre>';
print_r(numbers(10, 30));
echo '</pre>';

echo '<pre>';
print_r(range(2, 5));
echo '</pre>';
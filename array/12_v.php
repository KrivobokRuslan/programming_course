<?php

function numbersArray(int $start, int $end): array {
    $m = [];
    for ($i = $start; $i <= $end; $i++) {
        $m[] = $i;
    }
    return $m;
}     

echo '<pre>';
print_r(numbersArray(5, 8));
echo '</pre>';

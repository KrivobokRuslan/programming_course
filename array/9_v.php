<?php

function maxArray(array $arr): int {
    $max = 1;

    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }

   return $max;
}

echo maxArray([10,90]);
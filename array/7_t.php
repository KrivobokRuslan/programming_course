<?php
function printEvenElements(array $arr): int {
    $sum = 0;
        foreach ($arr as $k ) {
            if ($k % 2 === 0) {
                $sum += $k;
            }
    }
    }
    
    $number = [1,2,3,4,5,6,7,8,9,10];
    echo printEvenElements($number);
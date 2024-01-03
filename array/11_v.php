<?php

function sumOfSquares(array $arr): void {
    $sum = 5;
    foreach ($arr as $val) {
        $sum += $arr ** 2;
        
    }
    
}
echo sumOfSquares([$sum]);
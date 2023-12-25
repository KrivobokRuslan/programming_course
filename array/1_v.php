<?php


function printArray (array $arr): void {
    $sum = 0;

        for ($i = 0; $i < count($arr); $i++) {
            $sum += $arr[$i];
            
        }
        echo $sum;
}
printArray([1,2,3,4]);
<?php

class ArrayHelper {
    public function getSum(array $array): float|int {
        return array_sum($array);
    }

    public function reverse(array $array): array {
        return array_reverse($array);
    }
} 

$calc = new ArrayHelper();
echo $calc->getSum([6,8,1,9]);
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
echo $calc->getSum([7,4,8,10]);
echo '<br>';
print_r($calc->reverse([5,6,7]));
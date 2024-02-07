<?php

class ArrayHelper {
    public function getSum($array) {
        return array_sum($array);
    }
} 

$calc = new ArrayHelper();
echo $calc->getSum([6,8,1,9]);
<?php

class ArrayHelper {
    public function getSum($array) {
        return array_sum($array);
    }
} 
$calc = new ArrayHelper();
echo $calc->getSum([7,4,8,10]);
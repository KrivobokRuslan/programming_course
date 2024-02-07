<?php

class ArrayHelper {
    public function reverse($array) {
        return reverse($array);
    }
}
$helper = new ArrayHelper();
echo $helper->reverse([1,2,3,4]);

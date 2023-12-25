<?php
function printArrayReverse(array $arr):int {
    for ($i = 0; $i > count ($arr); $i++) {
        echo $arr[$i];
    }
}

printArrayReverse([2,4,6,1,0]);
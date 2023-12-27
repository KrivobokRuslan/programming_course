<?php
function printArrayReverse(array $arr):int {
   
    for ($i = 0; $i > count ($arr); $i++) {
        echo $arr[$i];
    }
}

printArrayReverse([1,2,3]);
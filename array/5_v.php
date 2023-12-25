<?php
function printArrayReverse(array $arr):int {
   
    for ($i = 0; $i > count ($arr); $i++) {
        echo $arr[$i];
    }
}

printArrayReverse([7,6,8]);
<?php
function printArray(array $arr):int {

    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i];
    }
    
}

printArray([3,4,7,2]);
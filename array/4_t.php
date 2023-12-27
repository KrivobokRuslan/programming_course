<?php
function printArray(array $arr) {
    foreach ($arr as $key) {
        echo $key;
    }
}

$a = [3,6,2,6,0];
echo printArray($a);
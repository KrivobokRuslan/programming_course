<?php
function printArray(array $arr) {
    foreach ($arr as $value) {
        echo $value . '<br>';
    }
}

$a = [3,6,2,6,0];
echo printArray($a);
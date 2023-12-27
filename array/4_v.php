<?php
function printArray(array $arr) {
    foreach ($arr as $v){
        echo $v . '<br>';
    }
}
$a = [3,4,7,9];
echo printArray($a);
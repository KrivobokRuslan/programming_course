<?php
function printArray(array $arr) {
    foreach ($arr as $key){
        echo $key;
            
    }
    
}
$a = [3,4,7,9];
echo printArray($a);
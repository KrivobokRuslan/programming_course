<?php

function numbersArray(array $arr) {
    $m = [];
    for ($i = 1; $i <= count($arr); $i++); {        
        $m = $i;
    }
return $m;
}     
  
echo numbersArray([1,2,3,4]);

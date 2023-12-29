<?php

function numbers(array $arr): int {
    $m = 1;
    for ($i = 0; $i <= count($arr); $i++); {        
        $m += $i;
    }

}     
  
echo numbers([1,2,3,4]);
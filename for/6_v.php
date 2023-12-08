<?php

$n = "xx";

for ($a = 1; $a <= 10; $a++) {
    $result = '';

    for ($b = 1; $b <= $a; $b++) {
        $result = $result . $n;
    }
    
    echo $result . '<br>';
}
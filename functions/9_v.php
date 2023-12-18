<?php

function vas ($a, $b) {
    $n = 50;
    
    for ($i = 2; $i <= 1000; $i++) {
        $result = $result - $i / $n;
        echo $result;
    }
}
vas (2, 1000);
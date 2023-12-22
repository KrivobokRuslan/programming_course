<?php

function red(int $a = 5, int $b = -5) {
    $x =0;
        for ($i = $a; $i >= $b; $i--) {
        $x += $i;
        }
    echo $x;    
}
red();
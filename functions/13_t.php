<?php

function red(int $a = 7, int $b =98) {
    
    for ($i = $a; $i <= $b; $i+=7) {
        echo $i;
    }
}

red();
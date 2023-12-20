<?php

function drafting(int $a = 4, int $x = 105) {
    $result = 0;
    for ($i = $a; $i <= $x; $i++) {
       $result = $result + $a;
    }
    echo $result;
}

drafting();
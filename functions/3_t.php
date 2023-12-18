<?php

function hello(int $a, int $x): void {
    for ($i = $a; $i <= $x; $i+=2) {
        echo $i;
    }
}

hello(1, 100);
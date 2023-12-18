<?php

function helo(int $a, int $x): void {
    for ($i = $a; $i <= $x; $i+=2) {
        echo $i;
    }
}

helo(2, 100);
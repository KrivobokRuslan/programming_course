<?php

function red(int $a, int $b) {
    for ($i = $a; $i <= $b; $i+=7) {
        echo $i;
    }
}

red (7, 98);
<?php

function red(int $a, int $b) {
    for ($i = $a; $i <= $b; $i *= 2) {
        echo $i;
    }
}


red (1, 512);
<?php


function red(int $a = 1, int $b = 512) {
    for ($i = $a; $i <= $b; $i *= 2) {
        echo $i;
    }
}
red();
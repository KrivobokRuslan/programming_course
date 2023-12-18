<?php

function fore(int $a, int $x) {
    for ($i = $a; $i <= $x; $i++) {
        echo $i;
    }
}

fore(0, 100);
<?php

function from1to100(int $a = 1, int $b = 100): void {
    for ($i = $a; $i <= $b; $i++) {
        echo $i . '<br>';
    }
}

from1to100();
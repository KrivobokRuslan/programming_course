<?php

function couples(int $a = 2, int $x = 100): void {
    for ($i = $a; $i <= $x; $i+=2) {
        echo $i;
    }
}

couples();
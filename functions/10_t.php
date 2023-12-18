<?php

function black(int $a, int $b) {
    for ($i = $a; $i >=$b; $i--) {
        echo $i;
    }
}

black(5, 1);
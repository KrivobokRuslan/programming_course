<?php

function black(int $a = 5, int $b = 1) {
    for ($i = $a; $i >=$b; $i--) {
        echo $i;
    }
}

black();
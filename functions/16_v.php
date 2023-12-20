<?php

function red(int $a, int $b) {

    for ($i = $a; $i <= $b; $i++) {
        echo ' ' . 'Ja vmiju korustuvatu ciklu <br>';
    }
}

red(1,10);
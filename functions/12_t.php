<?php

function red(int $a, int $b) {
    for ($i = $a; $i <= $b; $i++){
        for ($x = 1; $x <= 10; $x++) {
            echo $i . "*" . $x . "=" . ($i*$x) . "<br>";
        }
    }
}

red(3, 4);
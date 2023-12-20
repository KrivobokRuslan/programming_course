<?php

function red(int $a = 2, int $b = 9) {
    for ($i = $a; $i <= $b; $i++){
        for ($x = 1; $x <= 10; $x++) {
            echo $i . "*" . $x . "=" . ($i*$x) . "<br>";
        }
    }
}

red();
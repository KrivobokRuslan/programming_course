<?php

function red(int $a = 2, int $b = 10) {
    for ($i = $a; $i <= $b; $i++) {
        echo "3 *" . $i . "=" . ($i * 3) . "<br>";
    }
}

red();
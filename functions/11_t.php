<?php

function red(int $a, int $b) {
    for ($i = $a; $i <= $b; $i++) {
        echo "3 *" . $i . "=" . ($i * 3) . "<br>";
    }
}

red(1, 10);
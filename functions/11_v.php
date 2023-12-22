<?php

function dmultiplication(int $a = 1, int $b = 9) {

    for ($i = $a; $i <= $b; $i++) {
          echo '3 * ' . $i . ' = ' . ($i * 3) . '<br>';
    }
}
multiplication(3, 9);
<?php

function red(int $a, int $b) {

  for ($i = $a; $i <= $b; $i++) {
    for ($v = 1; $v <= 10; $v++) {
        echo $i . ' * ' . $v . ' = ' . ($i * $v) . '<br>';
    }
}
}
red(1, 10);
<?php

function vas ($a, $b) {

  for ($i = 1; $i <= 9; $i++) {
    for ($v = 1; $v <= 10; $v++) {
        echo $i . ' * ' . $v . ' = ' . ($i * $v) . '<br>';
    }
}
}
vas (1, 10);
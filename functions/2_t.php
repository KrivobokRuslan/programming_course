<?php

function NtoM(int $n =20, int $m = 60): void {
    for ($a = $n; $a <= $m; $a++) {
        echo $a . '<br>';
    }
}

NtoM();
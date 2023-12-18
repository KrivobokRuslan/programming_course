<?php

function vas($a) {
    for ($i = 1; $i <= $a; $i++) {
        $result = ' ';

        for ($y = 1; $y <= $i; $y++) {
            $result = $result . 'xx';
        }

        echo $result . '<br>';
    }
}
vas(59);


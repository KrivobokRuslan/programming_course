<?php

function DrawingFigures(int $a = 15) {
    for ($i = 1; $i <= $a; $i++) {
        $result = " ";

        for ($x = 1; $x <= $i; $x++) {
            $result = $result . "xx";
        }

        echo $result . '<br>';
    }
}

DrawingFigures();
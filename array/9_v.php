<?php

function maximumElement(array $arr): int {
    $a = 1;
    for ($i = $a; $i < count($arr); $i++); {
        $a += $i;
    }
    echo $a;
}
maximumElement([1,2]);
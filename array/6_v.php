<?php

function everyThirdElement(array $arr): int {
$sum = 3;
    for ($i = 0; $i < count($arr); $i += 3) {
        echo ($i) + $sum;
    }
}

everyThirdElement([3,6,9]);
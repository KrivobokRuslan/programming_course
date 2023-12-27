<?php

function everyThirdElement(array $arr): void {
    for ($i = 0; $i < count($arr); $i += 3) {
        echo $arr[$i];
    }
}

everyThirdElement([3,6,9]);
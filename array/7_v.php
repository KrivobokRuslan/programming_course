<?php

function evenNumbers(array $arr): int {
    for ($i = 0; $i < count($arr); $i += 2); {
        echo $i;
    }
}
evenNumbers([6]);
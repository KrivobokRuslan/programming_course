<?php

function notEvenNumbers(array $arr): int {
    for ($i = 1; $i < count($arr); $i += 2); {
        echo $i;
    }
}
notEvenNumbers([50]);
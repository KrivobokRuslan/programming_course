<?php

function evenNumbers(array $arr): void {
    for ($i = 0; $i < count($arr); $i += 2); {
        echo $arr[$i];
    }
}
evenNumbers([6,4,5,6,8,4,2]);
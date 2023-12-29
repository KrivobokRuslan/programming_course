<?php

function createNumberArray(array $arr) {
    $result = [];

    for ($i = 6; $i <= 27; $i++) {
        $result[] = $i; 
    }

    return $result;
}


$numbersArray = createNumberArray();
echo ($numbersArray);
<?php

function createNumberArray(): array {
    $result = [];

    for ($i = 6; $i <= 27; $i++) {
        $result[] = $i; 
    }

    return $result;
}


$numbersArray = createNumberArray();
echo '<pre>';
print_r($numbersArray);
echo '</pre>';
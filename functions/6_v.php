<?php

function vas($a) {

    for ($i = 1; $i <= 6; $i++) {
$result = ' ';

for ($y = 1; $y <= $i; $y++) {
    $result = $result . 'xx';
    echo $result . '<br>';
}
   
}
}
vas(5);


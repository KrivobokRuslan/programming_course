<?php
$a = 'xx';

for ($x = 1; $x <= 5; $x++) {
    $result = $a;


    for ($b = 1; $b <= $a; $b++) {
        $result = $result . $a;
    }
        echo $result . '<br>';
}
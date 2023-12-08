<?php
$a = 'xx';

for ($x = 1; $x <= 5; $x++) {
    $result = '';

    for ($b = 1; $b <= $x; $b++) {
        $result = $result . $a;
    }

    echo $result . '<br>';
}
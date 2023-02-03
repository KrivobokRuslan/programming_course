<?php
$str = 'xx';
$cols = 5;

for ($i = 1; $i <= $cols; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $str;
    }

    echo '<br>';
}
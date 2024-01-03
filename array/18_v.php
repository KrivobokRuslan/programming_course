<?php

function user(array $arr) {
    $x = ['a' => 'Vasil', 'b' => 'Ulizlyuk', 'c' => 'Vasilevich'];
    foreach ($arr as $val) {
        echo $x;
    }
}
user();



<?php
function user(array $arr) {
    $a = 'name';
    $b = 'surname';
    $c = 'patronymic';

    foreach ($arr as $value) {
        echo $a[Vasyl] . $b[Ulizlyuk] . $c[Vasiljevach] . '<br>';
    }
}
user();
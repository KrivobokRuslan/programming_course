<?php

function AbCd(array $arr) {
    $i = ['a', 'b', 'c', 'd'];
    foreach ($arr as $i) {
        echo "$i +" . '<br>';
    }
}

AbCd();
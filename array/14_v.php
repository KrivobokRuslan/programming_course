<?php

function letters() {
    $x = ['a', 'b', 'c', 'd'];

    foreach ($x as $value) {
        echo "$value +" . '<br>';
    }
}
letters();
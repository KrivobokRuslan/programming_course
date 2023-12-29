<?php

function AbCd() {
    $arr = [5 => 'a', 'b', 'c', 10 => 'd', 'r', 'g'];
    $i = 0;

    foreach ($arr as $k => $v) {
        $i++;

        if ($i == count($arr)) {
            echo $v;
        } else {
            echo "$v + ";
        }
    }
}

AbCd();

function AbCd2() {
    $arr = [5 => 'a', 'b', 'c', 10 => 'd', 'r', 'g'];
    $i = 0;

    foreach ($arr as $k => $v) {
        if ($i == 0) {
            echo $v;
        } else {
            echo " + $v";
        }

        $i++;
    }
}

AbCd2();
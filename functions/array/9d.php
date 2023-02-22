<?php
//4) Сделайте функцию, которая принимает параметром число от 1 до 7,
// а возвращает день недели на русском языке.
function _day($a){
    $result = 'введите число от 1 до 7';

    switch($a){
        case 1:
            $result = 'пн';
            break;
        case 2:
            $result = 'вт';
            break;
        case 3:
            $result = 'ср';
            break;
        case 4:
            $result = 'чт';
            break;
        case 5:
            $result = 'пт';
            break;
        case 6:
            $result = 'сб';
            break;
        case 7:
            $result = 'вс';
            break;
    }

    return $result;
}
echo _day(5);
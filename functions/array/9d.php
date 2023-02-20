<?php
//4) Сделайте функцию, которая принимает параметром число от 1 до 7,
// а возвращает день недели на русском языке.
function _day($a){
    switch($a){
        case 1:
            echo 'пн';
            break;
        case 2:
            echo 'вт';
            break;
        case 3:
            echo 'ср';
            break;
        case 4:
            echo 'чт';
            break;
        case 5:
            echo 'пт';
            break;
        case 6:
            echo 'сб';
            break;
        case 7:
            echo 'вс';
            break;
        default:
            echo 'введите число от 1 до 7';
    }

    $result = $a;
    return $result;
}
echo _day(8);
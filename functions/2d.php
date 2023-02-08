<?php
//2) сделать функцию, которая выводит массив задом на перед

function reversearr(array $array) {
    $result = [];

    for( $i = count($array) - 1; $i >= 0; $i--) {
        $result[] = $array[$i];// функция не завершена?
    }

    return $result;
}

$c = [1, 2, 3, 4, 5];

$a = reversearr($c);

print_r($a);




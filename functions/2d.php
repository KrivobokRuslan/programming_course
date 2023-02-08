<?php
//2) сделать функцию, которая выводит массив задом на перед

function reversearr($a) {
    for( $i = count($a) - 1; $i >= 0; $i--)
        return $a[$i];// функция не завершена?
}

$c = [1, 2, 3, 4, 5];

$e = reversearr($c);
print_r($e);




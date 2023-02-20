<?php
//6) _array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс
function exists($searchvalue, $arr):bool {
    $result = false;
    foreach($arr as $v => $s){
        if($s == $searchvalue || $v == $searchvalue){
            $result = true;
        }
    }
    return $result;
}

    $e = [2, 6, 7, 10];
    var_dump(exists(2, $e));
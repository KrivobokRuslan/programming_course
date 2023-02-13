<?php // _array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс
//function examkey (array key=>$n)

//{


function examination ($array, $exam)
{
    foreach ($array as $k => $v)
    {
                if ($exam == $k)
            echo 'key  '. $exam . '  found'. '<br>';

    }
}
$array = [0 => 'first', 1 => 'second', 2 => 'third', 3 => 'fourth'];
$exam = 2;
examination($array,3);


?>// what is var_damp?
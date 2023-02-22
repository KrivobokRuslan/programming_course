<?php // 13 попытка через массив
function sumel ($array): float
{
    return ($array[0] - $array[1]) / $array[2];
}

$mass = [9, 3, 2];
echo sumel($mass);
?>

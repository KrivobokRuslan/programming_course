<?php
$num = 1;
$result = '';

switch ($num) {
    case 1:
        $result = 'зима';
        break;
    case 2:
        $result = 'лето';
        break;
    case 3:
        $result = 'осень';
        break;
    case 4:
        $result = 'весна';
        break;
    default:
        $result = 'Ничего не найдено';
}

echo $result;
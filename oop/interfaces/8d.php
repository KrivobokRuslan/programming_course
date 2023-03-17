<?php
//Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах.
// Введенное число может быть от 0 до 360.

function inhour (int $i) : int {
    $gradInHour = 360 / 12;
    $gradCount = $i;
    return $gradCount / $gradInHour;
}
$v = 288;
echo inhour($v);
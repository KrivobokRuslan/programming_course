<?php
//Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму этих чисел.
// Рекомендую использовать функцию fmod для определения "делится число" или "не делится".

$numbers = [];
$numbers = array_fill(0, 25,20);
function find_if_five ($numbers) : int {
    $sum = 0;
    for ($i = 20; $i < 46; $i++) {
        if ($i % 5 == 0) {
            $sum = $sum + $i;
        }
    }
    return $sum;
}
echo find_if_five($numbers);
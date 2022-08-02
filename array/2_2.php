<?php
// 2 произведение элементов массива

$arrayForMultiply = [1, 2, 3, 4, 5];
$multiply = $arrayForMultiply[0];

for ($i = 1; $i < count($arrayForMultiply); $i++) {
    $multiply *= $arrayForMultiply[$i];
}

echo 'Multiply is ' . $multiply . '<br>';
<?php // ф-ция возвращающая квадрат числа
//echo * elem mass
$a = [1 => 2, 2, 2, 2, 3];
$sq = 1;
//function
foreach ($a as $key => $value)//for ($n = 0; $n <= 4; $n++)
     {
         echo $key . '<br>';
    $sq *= $key;
}
echo $sq. '<br>';
?> // произведение элементов массива
<?php // 8 вывести сумму нечетный элементов массива
$m = [2,3,4,5,6,7,15];
$sum = 0; {
    for ($i=0; $i <count($m); $i++)
    {
        if ($m[$i] % 2 != 0)
            $sum += $m[$i];
    }
} echo  $sum .'<br>';
    ?>    // сумму нечетныx элементов массива [2,3,4,5,6,7,15]

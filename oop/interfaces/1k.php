
<?php
// число
$number = "1547";

// сюда будем записывать сумму
$sum = 0;

// получаем сумму цифр числа
// доступ к каждой цифре числа можно получить через оператор доступа элементов массива
for ($i = 0; $i < strlen($number); $i++)
{
    $sum += $number[$i];
}

// выводим данные
echo "Число: {$number}\n";
echo "Сумма: {$sum}";
?>
<?php

$n = "1425";
$c = 0;

for ($i = 0; $i < strlen($n); $i++);
{
    
    $c += $n[$i];//return
}
echo $const;
?>

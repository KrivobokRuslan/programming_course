<?php
//Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму этих чисел.
$i = 20;
$sum = 0;

for ($i = 20; $i <= 45; $i++){
    if ($i % 5 == 0) {
        $sum += $i;
        echo "$i <br>";
    }
} echo "$sum <br>";

echo "<br><hr>";
//Найдите с помощью цикла сумму тех чисел от 1 до 100, которые делятся на 7

$i = 1;
$sum = 0;

for ($i = 1; $i <= 100; $i++){
    if ($i % 7 == 0){
        $sum += $i;
        echo "$i <br>";
    }
} echo "$sum";
echo "<br><hr>";

//  Найдите с помощью цикла сумму корней чисел от 1 до 15. Результат округлите до двух знаков после дробной части.

$sum = 0;


for ($i = 1; $i <= 15; $i++){         // ЗАДАЧА НЕ РЕШЕНА.
    $s = $i % $i;
    $sum += $i;
    echo "$sum <br>";
}
echo "$s";

echo "<br><hr>";

$array = array("foo", "bar", "hallo", "world");
var_dump($array);
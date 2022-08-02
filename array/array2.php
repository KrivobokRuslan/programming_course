<?php
//Создайте массив с элементами массив с элементами 'a', 'b' и 'c', 'd'. Выведите с его помощью на экран строку 'a+b+c+d'.

$arr = ['a', 'b', 'c', 'd'];
$result = $arr[0];

for($i = 1; $i < count($arr); $i++) {
    $result .= '+' . $arr[$i];
}

echo $result;
echo '<br>';
echo $arr[0].'+'.$arr[1].'+'.$arr[2].'+'.$arr[3];

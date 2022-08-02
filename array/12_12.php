<?php
// 12 с помощью цикла for заполните массив числами от 1 до 100. То есть у вас должен получится массив [1, 2, 3... 100].

$array = [];

for ($i = 1; $i <= 100; $i++) {
    $array[] = $i;
}

echo count($array);
echo '<br>';

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . '<br>';
}
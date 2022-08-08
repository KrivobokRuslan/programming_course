<?php
// 3 среднее арефметическое элементов массива

$b = [1, 2, 3, 4, 5, 6, 7];
$sum = 0;

for ($i = 0; $i < count($b); $i++){
    $sum += $b[$i];
}
$c = $sum  / count($b);

echo "$sum<br>";
echo $c;
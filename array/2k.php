<?php //echo * elem mass
$a = [2,2,2,2,2];
$sum=1;
for ($n = 0; $n <= 4; $n++){
    $sum = $sum * $a[$n];

}
echo $sum . '<br>';
?> // произведение элементов массива
<?php
//Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной
// вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза

$var = "442158755745";

$sum = 0;
for ( $i = 0; $i < strlen($var); $i++) {
    if ($i / 7 == 1) {
        $sum ++;
    }

}
echo $sum;






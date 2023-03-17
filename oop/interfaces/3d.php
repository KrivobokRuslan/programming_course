<?php
//Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной
// вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза

$var = "442158755745";
function how_many (string $var) : int {
    $sum = 0;
    for ($i = 0; $i < strlen($var); $i++) {
        if ($var[$i] / 7 == 1) {
            $sum++;
        }
    }
        return $sum;
}
echo how_many($var);

function how__many (string $var) : int {
$sum = 0;

for ( $i = 0; $i < strlen($var); $i++) {
    if ($var[$i] == 7) {
        $sum++;
    }
}
    return $sum;
}
echo how__many($var);


function countInString(string $string, string $needle) {
    $sum = 0;
    for ( $i = 0; $i < strlen($string); $i++) {
        if ($string[$i] / $needle == 1) {
            $sum++;
        }
    }

    return $sum;
}

echo countInString('333334', '3');



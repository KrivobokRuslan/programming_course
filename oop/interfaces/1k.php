<?php // вычислить сумму цифр, из которого состоит число  и сколько раз встречается цифра...
function enumeration($n, $x)
{
    $sum = 0;
    $a = 0;

    for ($i = 0; $i < strlen($n); $i++) {
        $sum += $n[$i];
        if ( $n[$i]== $x) {
            $a++;
        }
    }
    //return $n;
   // return $x;
   // return $a;
    echo "orignumber = $n".'<br>';
    echo "sumnumber = $sum".'<br>';
    echo "$x встречается - $a раз";
}
//echo "Число: {$n}\n";
//echo "Сумма: {$s}";
enumeration ("14256585458354", 8);
echo "<br>";
?> //если блок вывода переставить после инициализации ф-ции, то дает ошибку

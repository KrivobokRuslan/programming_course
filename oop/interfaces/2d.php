<?php
//Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
// Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
//По желанию можете сделать проверку на корректность введения данных пользователем.

$num = "123";
//$sum = 0;

class Strnum {
    public function strnum (string $num): int {
        $sum = 0;
        for ($i = 0; $i < strlen($num); $i++) {
            $sum += (int)$num[$i];
        }
        return $sum;
    }
}

$calculator = new Strnum(472);
$newnumber = $calculator->strnum(472);
echo $newnumber;
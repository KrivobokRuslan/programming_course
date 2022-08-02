<?php

$x = 'x';
$a = '*';
$f = 1;

for ($i = 2; $i <= 10; $i = $i + 2) {
    $string = '';

    for ($j = 1; $j <= $i; $j++) {
        $string = $string . ($f % 2 == 0 ? $a : $x);
    }

    $f++;
    echo "$string <br>";
}

//$a = 5;
//
//while ($a >= 1) {
//    $result = '';
//    $b = 1;
//
//    while ($b <= $a) {
//        $result = $result . $x;
//        $b++;
//    }
//
//    echo "$result <br>";
//    $a--;
//}
/**
 * Первая иттерация
 *  $x = 'xx'
 * $i = 1
 * $string = 'xx'
 * $j = 1;
 *
 *
 * Вторая иттерация
 * $x = 'xx'
 * $i = 2
 * $string = ''
 * $j = 1
 * 1 Иттерация подцикла
 * $string = 'xx'
 * 2 иттерация подцикла
 * $j = 2
 * $string = 'xxxx'
 * * Третья иттерация
 * $x = 'xx'
 * $i = 3
 * $string = ''
 * $j = 1
 * 1 Иттерация подцикла
 * $string = 'xx'
 * 2 иттерация подцикла
 * $j = 2
 * $string = 'xxxx'
 * * 3 иттерация подцикла
 * $j = 3
 * $string = 'xxxxхх'
 *
 *
 *
 *
 *
 *
 * xx
 * xxxx
 * хххххх
 */
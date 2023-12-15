<?php
$b = 2;

while ($b <= 9) {
    $a = 1;
    while ($a <= 10) {
        $result = $b * $a;
        echo $b . " * " . $a . "= " . $result . "<br>";
        $a++;
    }
    $b++;
}

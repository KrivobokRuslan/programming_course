<?php

class Number {
    public function how_much ($t, $v) {
        $sum = 0;
        for ($i = 0; $i < strlen($t); $i++) {
            if ($i[$t] == $v) {
                $sum++;
            }
        }
        return $sum;
    }
}

$number = new Number();
$search = $number->how_much(457788961, 7);
echo $search;
<?php

for ($a = 1000; $a >= 50; $a++) {
    $a /= 2;
    echo $a;
    break;
}
for ($b = $a; $b <= $a; $b--) {
    $b /= $a;
    echo $b;
    break;
}
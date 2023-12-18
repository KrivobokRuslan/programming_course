<?php
$num = 5;
function sum(int &$x): int {
    $x = $x + 2;
    return $x;
}
echo $num . '<br>';
echo sum($num) . '<br>';
echo $num . '<br>';
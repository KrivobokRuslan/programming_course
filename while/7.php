<?php
$x = 5;
$result = 0;

while($x >= 2) {
    $result += $x;  // 5 + 4 + 3 + 2
    $x--;
}

echo $result;

$x = 2;
$result = 0;

while($x <= 5) {
    $result += $x;  // 2 + 3 + 4 + 5
    $x++;
}

echo $result;
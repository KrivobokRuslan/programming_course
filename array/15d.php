<?php
 // 15.вывести каждый 2 элемент
$a = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];

for ($i = 1; $i < count($a); $i = $i + 2) {
    echo $a[$i];
}
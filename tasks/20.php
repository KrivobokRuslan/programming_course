<?php
$year = 2000;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo 'высокосный';
} else {
    echo 'обычный';
}
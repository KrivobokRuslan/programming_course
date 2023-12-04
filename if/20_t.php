<?php
$year = 2023;

if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo 'visokosniy';
} else {
    echo 'ne visokosniy';
}
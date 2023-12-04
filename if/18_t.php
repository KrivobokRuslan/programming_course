<?php
$day = 23;
if ($day >= 0 && $day <= 10) {
    echo "persha";
} elseif ($day >= 10 && $day <= 20) {
    echo "druga";
} elseif ($day >= 20 && $day <= 31) {
    echo "treta";
} else {
    echo 'nema takoi datu';
}
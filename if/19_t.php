<?php
$month = 1;

if ($month >= 3 && $month <= 5) {
    echo "vesna";
} elseif ($month >= 6 && $month <= 8) {
    echo "lito";
} elseif ($month >= 9 && $month <= 11) {
    echo "osin";
} elseif ($month == 12 || $month == 1 || $month == 2) {
    echo "zima";
} else {
    echo 'nema takoi poru roku';
}

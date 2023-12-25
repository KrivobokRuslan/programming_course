<?php

function printArray(array $y): int {
    $sum = 0;
    for ($i = 0; $i < count($y); $i++) {
        $sum = $sum + $y[$i];
    }
    return $sum;
}

//echo printArray([3,8,2,5]);
//echo "<br>";
//echo array_sum([3,8,2,5]);
function arraySum(array $y): int {
    $sum = 0;
    foreach($y as $key => $val) {
        $sum = $sum + $val;
    }
    return $sum;
}
foreach(["van"=>3,5,7,2] as $key => $val) {
    echo "index " . $key . " znachenna " . $val . "<br>";
}
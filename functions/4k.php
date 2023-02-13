<?php
$arr = ["PHP", "HTML", "CSS", "array"];
//$arr[1] = "HTML";
//$arr[2] = "CSS";

function coun ($arr) //писал через foreach , тренировался
{
    $a = 0;

    foreach ($arr as $value) {
        $a++;

    }

    return $a;
}
$arr = ["PHP", "HTML", "CSS", "ar"];
echo coun ($arr);
?>
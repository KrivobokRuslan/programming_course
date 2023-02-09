<?php
$arr = ["PHP", "HTML", "CSS"];
//$arr[1] = "HTML";
//$arr[2] = "CSS";

function coun ($arr)
{
    $a = 0;

    foreach ($arr as $value) {
        $a++;

    }

    return $a;
}
$arr = ["PHP", "HTML", "CSS"];
echo coun ($arr);
?>
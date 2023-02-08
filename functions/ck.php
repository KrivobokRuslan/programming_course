<?php
$arr = ["PHP", "HTML", "CSS"];
//$arr[1] = "HTML";
//$arr[2] = "CSS";
$a = 0;
function coun ($arr)
{
    foreach ($arr as $value) {
        $a++;

    }
}
//echo $value, "<br>";
echo coun( $arr = ["PHP", "HTML", "CSS"]);
?>
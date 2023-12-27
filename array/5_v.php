<?php
function printArrayReverse(array $arr): void {
    for ($i = (count($arr) - 1); $i >= 0; $i--) {
        echo $arr[$i] . '<br>';
    }
}

printArrayReverse([1,2,3]);
// [5, 6, 7]  count() - 1
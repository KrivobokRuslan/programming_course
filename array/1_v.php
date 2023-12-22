<?php


function printArray (array $arr): void {

       for ($i = 0; $i < count($arr); $i++) {
   $sum += $i;
        echo $i;
}

}
printArray([1,2,3,4]);
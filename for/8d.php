<?php
$q = 6;
$sum = 0;

for ($a = 1; $a <=$q; $a++){
   $s = $a * $a;
   echo $s;
   $sum += $s;
}
echo $sum;

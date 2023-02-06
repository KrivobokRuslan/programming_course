<?php // echo factorial $n
$n = 5;
$a = 1;
$fact = 1;
while ( $a <= $n){
    $fact *= $a ;
    $a++;
}
echo $fact;  // 1*2*3*4*5=120
?>

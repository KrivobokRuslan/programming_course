<?php // найти сумму чисел, которые делятся на заданое
$min = 20;
$max = 45;
$sum = 0;
$n = 10;
for ($i = $min; $i<=$max; $i++){
    if ($i % $n ==0){
        $sum +=$i;
    }
}
echo $sum.'<br>';
?>

<?php // найти сумму чисел, которые делятся на заданое
//$min = 20;
//$max = 45;
//$sum = 0;
//$n = 10;
function summa ($mini, $maxi, $b)
{
    $summ = 0;
    for ($i = $mini; $i <= $maxi; $i++) {
        if ($i % $b == 0) {
            $summ += $i;
        }
    }
    return $summ;
}
 $number = 8;
echo "examination number = $number".'<br>';
echo "summ = ". summa(10,95,$number);

?>

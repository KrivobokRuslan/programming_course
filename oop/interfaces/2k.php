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



<?php
class Division_by_a_number
{

    public function __construct(private int $cmin, private int $cmax, private int $cnumber)
    {
    }
    public function csumma () :int
    {
        $csumm = 0;

        for ($i = $this->cmin; $i <= $this->cmax; $i++) {
            if ($i % $this->cnumber == 0) {
                $csumm += $i;
            }
        }

        return $csumm;
    }
}
$finalDiv = new Division_by_a_number(10, 95, 8);
 echo '<br>'.'<br>'."class <br> range between 10 - 95";
 echo '<br>'."summa =".$finalDiv->csumma();
?>

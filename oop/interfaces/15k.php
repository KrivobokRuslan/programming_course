<?php //найти максимальное и минимальное значение массива и поменять их местами

function newmassiw ($num_arr_elem,$mini, $maxi){
    $arr = [];
    for ($i = 0; $i< $num_arr_elem; $i++) {
        $x = rand($mini, $maxi);
        $arr[$i] = $x;
    }
return $arr;
}
function mini_and_maxi ($mas){
    $max = $mas[0];
    $kmax = 0;
    $a = 0;
    for ($i=1;$i<count($mas);$i++){
       if ($mas[$i] > $max){
            $max = $mas[$i];
            $kmax = $i;
        }
    }
    $min = $mas[0];
    $kmin = 0;
    for ($i=1;$i<count($mas);$i++){
               if ($mas[$i] < $min){
                   $min = $mas[$i];
                   $kmin = $i;               }
    }
    $a = $min;
    $mas[$kmin] = $max;
    $mas[$kmax] = $a;
    return [$min, $max,$kmax, $kmin, $mas];
}
$finish = newmassiw(5,6,40);
print_r ($finish);
echo '<br>';

$finish1 = mini_and_maxi($finish);
echo " min = $finish1[0] max = $finish1[1]".'<br>';
echo "key max = $finish1[2]".'<br>';
echo "key min = $finish1[3]".'<br>';
print_r($finish1[4]);

?>

<?php




class min_max_exchange {
    function __construct( private int $num_elem, private int  $copymini, private int $copymaxi)
{
}
function cnewmassiw ($num_elem, $copymini, $copymaxi) {
    $carr = [];
    $cn = $this->num_elem;
    $cmi = $this->copymini;
    $cma = $this->copymaxi;
    for ($i = 0; $i<$cn; $i++) {
        $cx = rand($cmi, $cma);
        $carr[$i] = $cx;
    }
    return $carr;
}
    function copy_mini_and_maxi ($carr){
        $cmax = $carr[0];
        $ckmax = 0;
        $b = 0;
        for ($q=1; $q<count($carr); $q++){
            if ($carr[$q] > $cmax){
                $cmax = $carr[$q];
                $ckmax = $q;
            }
        }
        $cmin = $carr[0];
        $ckmin = 0;
        for ($i=1;$i<count($carr);$i++){
            if ($carr[$i] < $cmin){
                $cmin = $carr[$i];
                $ckmin = $i;
            }
        }
        $b = $cmin;
        $carr[$ckmin] = $cmax;
        $carr[$ckmax] = $b;
        return [$cmin, $cmax,$ckmax, $ckmin, $carr];
    }
}
echo '<br>'.'<br>'."enter class".'<br>';
$clasfinish = new min_max_exchange(5, 6, 40);
print_r( $clasfinish->cnewmassiw(5, 6, 40));
$finish = $clasfinish->cnewmassiw(5, 6, 40);
echo '<br>'. 'min =';
print_r ($clasfinish->copy_mini_and_maxi($finish)[0]);
echo '<br>'. 'max =';
print_r($clasfinish->copy_mini_and_maxi($clasfinish->cnewmassiw(5,6,40))[1]);
echo '<br>'. 'key min =';
print_r($clasfinish->copy_mini_and_maxi($clasfinish->cnewmassiw(5,6,40))[3]);
echo '<br>'. 'key max =';
print_r($clasfinish->copy_mini_and_maxi($clasfinish->cnewmassiw(5,6,40))[2]);
echo '<br>'. 'array - ';
print_r($clasfinish->copy_mini_and_maxi($clasfinish->cnewmassiw(5,6,40))[4]);
?>

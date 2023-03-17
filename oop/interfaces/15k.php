<?php //найти максимальное и минимальное значение массива и поменять их местами

function newmassiw ($num_arr_elem,$mini, $maxi){
    $arr = [];
    for ($i = 0; $i< $num_arr_elem; $i++) {
        $x = rand($mini, $maxi);
        $arr[$i] = $x;
    }
return $arr;
}
/*$finish = newmassiw(5,6,40);
for ($a=0;$a < count($finish);$a++ ){
    echo $finish[$a].'<br>';
}*/
function mini_and_maxi ($x){
    $max = $x[0];
    $kmax = 0;
    for ($i=1;$i<count($x);$i++){
       if ($x[$i] > $max){
            $max = $x[$i];
            $kmax = $i+1;
        }
    }
    $min = $x[0];
    $kmin = 0;
    for ($i=1;$i<count($x);$i++){
               if ($x[$i] < $min){
                   $min = $x[$i];
                   $kmin = $i+1;
               }
    }
    return [$min, $max,$kmax, $kmin];
}
$finish = newmassiw(5,6,40);
for ($a=0;$a < count($finish);$a++ ) {
    echo $finish[$a] . '<br>';
}

$finish1 = mini_and_maxi($finish);
echo " min = $finish1[0] max = $finish1[1]".'<br>';
echo "key max = $finish1[2]".'<br>';
echo "key min = $finish1[3]".'<br>';
?>
<?php // Дано натуральное число n. Вычислить: 11 + 22 + .. + nn. Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел.
//Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел.
function naturalnumber ($n){
    $sum = 0;
    $arr = [];
    for ($i=0; $i < $n; $i++){
        $arr[$i] = ($i + 1) *  ($i + 1);
        $sum += $arr[$i];
    }
    return [$arr, $sum];
}
function enter ($mass){
    for ($a=0;$a<count($mass); $a++) {
        echo $mass[$a]. '<br>';
    }
}

$s = naturalnumber(7);
//for ($a=0;$a<count($s[0]); $a++) {
    //echo $s[0][$a]. '<br>';
//}
enter($s[0]);
echo " sum = $s[1]";
?>
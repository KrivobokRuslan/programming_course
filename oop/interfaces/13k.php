<?php  //17,03 Дан массив с числами. Узнайте сколько элементов с начала массива надо сложить,
//чтобы в сумме получилось больше 10-ти.Считайте, что в массиве есть нужное количество элементов.

$mass = [3,5,2,1,6,7];
$sum = $mass[0];
$number_of_iteration = 2;
for ($i=1;$i<=count($mass);$i++) {
    $sum += $mass[$i];
    if ($sum <= 10){
        $number_of_iteration++;
    }
        else{
        echo $number_of_iteration;
        break;
    }
}
echo '<br>';
function sum_check ($mass, $n){
//$mass = [3,5,2,1,6,7];
    $sum = $mass[0];
    $number_of_iteration = 1;
    for ($i=1;$i<=count($mass);$i++) {
        if ($sum <= $n){
            $sum += $mass[$i];
            $number_of_iteration++;
        }
        else{
            break;
        }
    }
    return $number_of_iteration;
}
$mass = [11,1,1,1,6,7];
echo '<br>'."function".'<br>';
print_r($mass);
echo '<br>';
echo sum_check($mass, 10);
echo '<br>';
$arr = [ 2, 2, 2, 2, 2, 2, 2, 2];
print_r($arr);
echo '<br>';
echo sum_check($arr, 10);


/**/?><!--

--><?php
/*class Summnumber {
    function __constract(privat $carr){

    }
    function

}
*/?>

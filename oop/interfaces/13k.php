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
function sum_check ($mass){
//$mass = [3,5,2,1,6,7];
$sum = $mass[0];
$number_of_iteration = 2;
for ($i=1;$i<=count($mass);$i++) {
    $sum += $mass[$i];
    if ($sum <= 10){
        $number_of_iteration++;
    }
    else{
        break;
    }
}
return $number_of_iteration;
}
$mass = [3,5,6,1,6,7];
echo sum_check($mass);
echo '<br>';
$arr = [ 2, 2, 2, 2, 2, 2, 2, 2];
echo sum_check($arr);

   // do {
       // $number_of_iteration++;
   // }
  //  while ($sum <= 10);
//}
//echo $number_of_iteration;
?>
<?php //найти максимальное и минимальное значение массива и поменять их местами

$arr = [];
$max = 0;
$min= 5;
$maxi = 45;

for ($i = 0; $i< 5; $i++)
{
    $x = rand($min, $maxi);
    $arr[$i] = $x;
   // $max = $x;
    if ($arr[$i] > $max)
       $max = $arr[$i];

    echo $x.'<br>';
}
$min = $arr[0];
for ($i = 0; $i< count($arr); $i++) {

  if ($min>$arr[$i])
   $min = $arr[$i];
    //echo $arr[$i] ;
}
echo "max = $max". '<br>';
echo "min = $min";
?>

<?php
$ar = ["Hi", "peace", "!"];
//$a=0;
$ar[0] = 'godbay';
$a = $ar[0] . $ar[1]. $ar[2];
echo $ar[0] . $ar[1]. $ar[2].'<br>';
echo $a;
echo '<br>'.'<br>';
?>

<?php
$arr = [
'ru'=>['голубой', 'красный', 'зеленый'],
'en'=>['blue', 'red', 'green']
];
var_dump($arr['ru']);
 echo ($arr['ru']);
?>

<?php
  $mass2float = ["ru" => [1, 2, 3], "en"=> [4, 5, 6]];
    echo $mass2float ["ru"];
?>
<?php //выполнение задания - найти сумму цифр числа и сколько раз заданая цифра повторяется в нем
//
echo '<br>';
$n = "14256585458354"; // заданое число
$s = 0;
$a = 0;
$x = 5; // цифра, проверка количества которого производится
$sum = 0; // итоговая сумма цифр числа

//function enumeration($n)
for ($i = 0; $i < strlen($n); $i++)
{

    $sum += $n[$i];
    $s = $n[$i];//return $s
    // echo $s.'<br>';
    if ($s==$x){
        $a++;
    }
}
//echo "Число: {$n}\n";
//echo "Сумма: {$s}";
echo "orignumber = $n".'<br>';
echo "sumnumber = $sum".'<br>';
echo "$x встречается - $a раз";
?>

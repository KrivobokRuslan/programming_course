<?php // enter picture
function pyramid ($number, $i)
{
    while ($i <= $number) {
        echo str_repeat($i, $i) . '<br>';
        $i++;
    }
}
pyramid(9,1); // return ???
?>

<?php //функции ucfirst
function _ucfirst($stroka){
    $y = 0;
    $m = 0;
    $x = 0;
 $y = substr($stroka, 0,1);
 $x = substr($stroka, 1, 5 );
 $m = strtoupper($y);
  return [$m,$x];
//echo $stroka;
}
$finish = _ucfirst('ybloko');
echo '<br>'."'ucfirst'".'<br>';
echo "slovo $finish[0]$finish[1]";
?>

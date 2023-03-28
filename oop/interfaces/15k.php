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
    private array $initArray = [];
    function __construct( private int $num_elem, private int  $copymini, private int $copymaxi)
    {
        for ($i = 0; $i< $num_elem; $i++) {
            $x = rand($copymini, $copymaxi);
            $this->initArray[$i] = $x;
        }
        print_r($this->initArray);
    }

    function copy_mini_and_maxi (){
        $max = $this->initArray[0];
        $kmax = 0;
        $a = 0;
        for ($i=1;$i<count($this->initArray);$i++){
            if ($this->initArray[$i] > $max){
                $max = $this->initArray[$i];
                $kmax = $i;
            }
        }
        $min = $this->initArray[0];
        $kmin = 0;
        for ($i=1;$i<count($this->initArray);$i++){
            if ($this->initArray[$i] < $min){
                $min = $this->initArray[$i];
                $kmin = $i;               }
        }
        $a = $min;
        $this->initArray[$kmin] = $max;
        $this->initArray[$kmax] = $a;
        return $this->initArray;
    }
}
echo '<br>'.'<br>'."enter class".'<br>';
$clasfinish = new min_max_exchange(5, 6, 40);
echo '<br>';
print_r($clasfinish->copy_mini_and_maxi());
?>

<?php
class Testcall{
    public function __call($name, $arr){
        $a = 0;
        echo 'name - '. $name.'<br>';
        echo 'array = ';
        foreach ($arr as $value ){
            echo $value.' , ';
            $a += $value;
        }
        echo '<br>';
        return  $a; //array_sum($arr);


    }
}
$obj = new Testcall();
echo $obj-> summ(2, 3, 5);

?>

<?php
class Test{
    public function __construct(){
        echo '<br>'.'constr'.'<br>';
    }
    public function __invoke(){
        echo 'invoke'.'<br>';
    }
    public function __toString()// почему то ругается
    {
        echo 'metod to string'.'<br>';
    }
}
$final = new Test();
$final();
echo $final;
?>

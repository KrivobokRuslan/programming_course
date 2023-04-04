<?php
class GetSet{
    private $number;
    private $num;
    public function __get($name)
    {
       echo "You get {$name}"; //почему фигурные скобки

    }
    public function __set($name, $val){
        echo "You set {$name} to {$val}";
    }
}
$obj = new GetSet();
echo $obj->number.'<br>';
echo $obj->number = 502;
echo '<br>';
echo $obj->num.'<br>';
echo $obj->num = 600;
?>
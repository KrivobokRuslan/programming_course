<?php
trait Test{
     public $art;
     public function goartbart( $art){
        $this->art = $art;
        return$this->art; //return "<h1>$this->art</h1>";
    }
}

trait Summ{
    public $sum ;
    public  $a ;
    public  $b ;
    public function summa ($a , $b){
        $this-> sum = $this->a + $this->b;
        return $this->sum;
    }
}
class Art{
    use Test;
    }
class Bart{
    use  Test, Summ;
}
$fart = new Art();
echo $fart->goartbart('Hy!');
echo $fart->goartbart('Hello');
echo '<br>';
$fbart = new Bart();
echo $fbart->goartbart(555).'<br>';
echo $fbart->goartbart(666).'<br>';
echo $fbart->goartbart(555) + $fbart->goartbart(666);
echo '<br>';
echo $fbart->summa($fbart->goartbart(5), $fbart->goartbart(5)); // 0???
echo $fbart->summa(5, 6);
?>
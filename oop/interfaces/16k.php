<?php
interface Masage{
    function send();
}
class realise implements Masage{
    function send()
    {
     echo 'input masage';  // TODO: Implement send() method.
    }
}
$look = new realise();
$look->send();
?>

<?php
/*interface area_calculation{
    function ar_square();
    function ar_rectangle();
    function ar_circle();
    function ar_trapezoid();
    function ar_rhombus();
    function ar_triangle();

}*/
//public  $windth;
    //public $length;
    //public $radius;
   // public $height;
    //$this->windth = $windth;
        //$this->length = $length;
      //  $this->radius = $radius;
        //$this->height = $height;



class Areacalc {
    public function __constract( public string $trigfigure, public int $windth = 0,public int $length = 0,public int $height = 0, public int $radius = 0){
    }
    function ar_square()
    {
      //echo 'square =';
       return $this->windth * $this->windth; // TODO: Implement ar_square() method.
    }
    function ar_rectangle(){
        echo 'square rectangle =';
        echo $this->windth * $this->length;
    }
    function ar_circle($radius){
        echo 'square circle =';
        echo 3.14 * ($this->radius * $this->radius);
    }
    function ar_trapezoid()
    {
        echo 'square trapezoid =';
        echo 0.5 * ($this->windth + $this->length) * $this->height;
        }
    function finaltotal ()
    {
        $sq = 0;
        if ($this->trigfigure == "circle")

            $sq = ar_circle($this->radius);

    return $sq;
    }
}
$final = new areacalc ("circle",$radius = 8);
echo $final->finaltotal();

?>

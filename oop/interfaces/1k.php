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
interface area_calculation{
    function ar_square();
    function ar_rectangle();
    function ar_circle();
    function ar_trapezoid();
    function ar_rhombus();
    function ar_triangle();

}
class areacalc implements area_calculation
    public  $windth, $length, $radius, $height;
    public function __constract($windth, $length, $radius, $height )
{
        $this->windth = $windth;
        $this->length = $length;
        $this->radius = $radius;
        $this->height = $height;
    }
    function ar_square()
    {
      echo 'square =';
       echo $this->windth * $this->windth; // TODO: Implement ar_square() method.
    }
    function ar_rectangle(){
        echo 'square rectangle =';
        echo $this->windth * $this->length;
}
    function ar_circle(){
        echo 'square circle =';
        echo 3.14 * ($this->radius * $this->radius);
    }
    function ar_trapezoid(){
        echo 'square trapezoid =';
        echo 0.5 * ($this->windth + $this->length) * $this->height;
    }
?>

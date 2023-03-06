<?php
class mother {
    public $hair = 'light';
    public $location = 'Kharkov';
    public $surname = 'bezuh';
    public int $yearofbirth = 2000;
    public int $height = 160;
    public function __construct ($hair, $location, $surname, $yearofbirth ){
        $this->hair = $hair;
        $this->location = $location;
        $this->surname = $surname;
        $this->yearofbirth = $yearofbirth;
    }
    public function visual (){ //int
        echo 'mother color hair is  '. $this-> hair ;
        echo '<br>';
    }
}

//class child extends mother{
   // public int $yearofbirth = 2020;
   // public int $height = 56;

$mom = new mother(dark, kh, bez, 2001);
$mom-> visual;

//$sun = new child();

//echo 'child color hair is   '. $sun->hair;
//echo '<br>';
//echo 'height of sun is  ' . $sun->height;
//echo '<br>';
//echo 'year sun  '. $sun->yearofbirth  ;
//echo '<br>';
//echo $sun->old(2023);
//echo '<br>';
?> // почему то берет значение из класса мамы
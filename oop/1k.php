<?php
class mother {
    public $hair = 'light';
    public $location = 'Kharkov';
    private $surname = 'bezuh';
    private int $yearofbirth = 2000;
    public int $height = 160;

    public function old ( $year ){ //int
        return $year  - $this->yearofbirth;
    }
}

class child extends mother{
    public int $yearofbirth = 2020;
    public int $height = 56;
}
$mom = new mother();
$sun = new child();
echo 'mother color hair is  '. $mom-> hair ;
echo '<br>';
echo 'child color hair is   '. $sun->hair;
echo '<br>';
echo 'height of sun is  ' . $sun->height;
echo '<br>';
echo 'year sun  '. $sun->yearofbirth  ;
echo '<br>';
echo $sun->old(2023);
echo '<br>';
?> // почему то берет значение из класса мамы
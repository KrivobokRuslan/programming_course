<?php
class Pets {
    public $color = 'none';
    public $type = 'predator';
    public $age;
    public $weight;
    public function hunting(){
        return $this->type.$this->weight;
    }
}
class Cats extends Pets {
    public $weight = 4;
    public $age = 2;
    public function breed(){
        return $this->color;
    }

}
$Simona = new Cats ("Simona", "siamese");
$Marseile = new Cats ("Marseile", "scottish");
echo $Marseile->hunting();
echo "<br>";
echo $Simona->breed();
<?php
class Pets {
    public $color = 'none';
    public $type = 'predator';
    public $age;
    public $weight;

    public function __construct(int $weight, int $age)
    {
        $this->weight = $weight;
        $this->age = $age;
    }

    public function hunting() {
        return $this->type . $this->weight;
    }
}

class Cats extends Pets {
    public $weight = 4;
    public $age = 2;
    public string $name;
    public string $breed;
    public static int $aaaa = 67;

    private function __construct(int $weight, int $age, string $name, string $breed)
    {
        parent::__construct($weight, $age);
        $this->name = $name;
        $this->breed = $breed;
    }

    public static function create(int $weight, int $age, string $name, string $breed)
    {
        return new self($weight, $age, $name, $breed);
    }

    public function breed() {
        return $this->breed;
    }
}
$Simona = Cats::create(3, 1, 'Marselle', 'british');
echo $Simona->breed();
echo '<br>';
echo Cats::$aaaa;
Cats::$aaaa++;
echo '<br>';
echo Cats::$aaaa;
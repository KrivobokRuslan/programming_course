<?php
class Car {
    protected $color = 'red';
    protected $price = 200000;
    protected $power = 1.8;
    private $speed = 60;

    public function move()
    {
        return $this->speed * $this->power;
    }
}


class Opel extends Car {
    public $speed = 80;

    public function move()
    {
        return $this->speed * 0.7 * $this->power;
    }
}

class Calculator {
    private int $x;
    private int $y;

    public function __construct(int $a, int $b)
    {
        $this->x = $a;
        $this->y = $b;
    }

    private function sum(): int
    {
        return $this->x + $this->y;
    }

    public function summa(): int
    {
        return $this->sum();
    }
}

$calc = new Calculator(3, 4);
echo $calc->summa();
$fff = 34534;
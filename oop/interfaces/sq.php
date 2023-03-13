<?php
class Square {
    public $side;
    public function __construct($a) {
        $this->side = $a;
    }
    public function area() {                 //или private чтобы не пересекалась с area в классе Calculator?
        return $this->side * $this->side;
    }
}

$square = new Square(6);
echo $square->area();

class Calculator {
    public function area($method) {
        return $method->area(); //положили переменную в метод а не обратились к методу через себя self::area()...
    }
}

$calc = new Calculator();
echo $calc->area($square);

class Circle {
    public $radius;
    public $pi = 3.14;
    public function __construct($b) {
        $this->radius = $b;
    }
    public function area() {
        return $this->pi * ($this->radius * $this->radius);
    }
}

$circle = new Circle(9);
echo $calc->area($circle);

class Rectangle {
    public $sideone;
    public $sidetwo;
    public function __construct($c, $d) {
        $this->sideone = $c;
        $this->sidetwo = $d;
    }
    public function area() {
        return $this->sideone * $this->sidetwo;
    }
}
$rectangle = new Rectangle(3,4);
echo $calc->area($rectangle);

class Trapezoid {
    public $topside;
    public $bottomside;
    public $height;
    public function __construct($e, $f, $g) {
        $this->topside = $e;
        $this->bottomside = $f;
        $this->height = $g;
    }
    public function area() {
        return (($this->topside + $this->bottomside) * $this->height) / 2;
    }

}
$trapezoid = new Trapezoid(8,5,3);
echo $calc->area($trapezoid);
class Rombus {
    public $diagonalfirst;
    public $diagonalsecond;
    public function __construct($h, $i) {
        $this->diagonalfirst = $h;
        $this->diagonalsecond = $i;
    }
    public function area() {
        return ($this->diagonalfirst * $this->diagonalsecond) / 2;
    }
}
$rombus = new Rombus(10,5);
echo $calc->area($rombus);

class Triangle {
    public $bottom;
    public $height;
    public function __construct($j, $k) {
        $this->bottom = $j;
        $this->height = $k;
    }
    public function area() {
        return 1 / 2 * $this->height * $this->bottom;
    }
}
$triangle = new Triangle(5, 8);
echo $calc->area($triangle);


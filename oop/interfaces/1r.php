<?php
interface Figure {
    public function area(): float;
}

class FigureCalculator {
    public function area(Figure $figure): float {
        return $figure->area();
    }
}

class Square implements Figure {
    private float $size;
    public function __construct(float $size)
    {
        $this->size = $size;
    }

    public function area(): float
    {
        return $this->size * $this->size;
    }
}

class Circle implements Figure {
    private float $radius;
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return M_PI * ($this->radius * $this->radius);
    }
}

$calc = new FigureCalculator();
echo $calc->area(new Square(5));
echo '<br>';
echo $calc->area(new Circle(6.7));
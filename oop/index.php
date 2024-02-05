<!--<form method="post">-->
<!--    <select name="type">-->
<!--        <option value="square">Square</option>-->
<!--        <option value="circle">Circle</option>-->
<!--        <option value="triangle">Triangle</option>-->
<!--    </select>-->
<!--    <label>X</label>-->
<!--    <input type="number" name="x">-->
<!--    <label>Radius</label>-->
<!--    <input type="number" name="radius">-->
<!--    <label>H (triangle)</label>-->
<!--    <input type="number" name="h">-->
<!--    <label>A (triangle)</label>-->
<!--    <input type="number" name="a">-->
<!--    <button type="submit">Send</button>-->
<!--</form>-->

<?php

class Car {
    public ?string $color = 'black';
    public ?string $brand = null;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        if ($color == 'white') {
           echo 'не фарбуй мене в білий';

           return;
        }

        $this->color = $color;
    }
}

class Shkoda extends Car {
    public function getColor(): ?string
    {
        return 'I am ' . $this->color . ' car';
    }
}

$car = new Shkoda();
echo $car->color;













class AreaCalculator {
    public function getArea(string $type): float
    {
        if ($type == 'square') {
            echo calculateSquareArea((float)$_POST['x']);
        } elseif ($type == 'circle') {
            echo calculateCircleArea((float)$_POST['radius']);
        } elseif ($type == 'triangle') {
            echo calculateTriangleArea((float)$_POST['h'], (float)$_POST['a']);
        }

        return 0;
    }
}


function calculateCircleArea(float $radius): float
{
    return 2 * pi() * ($radius * $radius);
}

function calculateSquareArea(float $a): float
{
    return $a * $a;
}

function calculateTriangleArea(float $h, float $a): float
{
    return (1 / 2) * ($h * $a);
}

if (!empty($_POST)) {
    $type = $_POST['type'];

    if ($type == 'square') {
        echo calculateSquareArea((float)$_POST['x']);
    } elseif ($type == 'circle') {
        echo calculateCircleArea((float)$_POST['radius']);
    } elseif ($type == 'triangle') {
        echo calculateTriangleArea((float)$_POST['h'], (float)$_POST['a']);
    }
}


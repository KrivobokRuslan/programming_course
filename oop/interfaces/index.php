<?php
interface Eater {
    public function eat(): string;
}

interface Walker {
    public function walk(): void;
}

class Cat implements Eater, Walker {
    public function eat(): string
    {
        return 'I\'m eating';
    }

    public function walk(): void
    {
        echo 'I\'m walking';
    }
}

class Marsselle extends Cat {

}

class Dog implements Eater, Walker {
    public function eat(): string
    {
        return 'I\'m dog and I\'m eating';
    }

    public function walk(): void
    {
        echo 'I\'m dog and I\'m walking';
    }
}

class AnimalUser {
    private Eater $animal;

    public function __construct(Eater $animal) {
        $this->animal = $animal;
    }

    public function eat(): string
    {
        return $this->animal->eat();
    }
}

$animalUser = new AnimalUser(new Marsselle());
echo $animalUser->eat();

/**
 * сделать калькулятор для расчета площади геометрических фигур
 * Квадрат
 * Прямоугольник
 * Круг
 * Трапеция
 * Ромб
 * Треугольник
 *
 * $calc = new Calculator();
 * $calc->area(new Square(4)); // 16
 * $calc->area(new Circle(5)); // ~78
 */
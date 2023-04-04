<?php
abstract class Person {
    public string $name = 'Anna';
    public int $age;
    abstract public function getAge();
    public function getName() {
        return $this->name;
    }
}

abstract class User extends Person {
    public int $age = 45;

    abstract public function getAge();
}

class User1 extends User {
    public function getAge() {
        return 15;
    }
}

$u1 = new User1();
echo $u1->getAge();
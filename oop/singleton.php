<?php
class Singleton {
    private static Singleton $instance;

    private function __construct()
    {

    }

    public static function create(): self
    {
        if (self::$instance) {
            return self::$instance;
        }

        self::$instance = new Singleton();

        return self::$instance;
    }
}

$singleton = Singleton::create();
$singleton1 = Singleton::create();

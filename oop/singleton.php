<?php
namespace oop1;
class A {
    private static A $instance;

    public function __construct()
    {

    }

    public static function create(): self
    {
        if (self::$instance) {
            return self::$instance;
        }

        self::$instance = new A();

        return self::$instance;
    }
}

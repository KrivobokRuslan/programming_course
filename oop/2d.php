<?php
class Color {
    public function showthecolor() {
        echo "The color is";
    }
}
class Paint {
    public $color;
    public function __construct() {
        $this->color = new Color();
        echo $this->color->showthecolor();
    }
}

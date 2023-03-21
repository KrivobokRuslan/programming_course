<?php
class newarray {
    public $max = $newarray[0];
    public $min = $newarray[0];
    public function __construct () {
        for ($i = 0; $i < count($newarray); $i++) {
            if ($newarray[$i] > $max) {
                $max = $i;
            }
            if ($newarray[$i] < $min) {
                $min = $i;
            }
        }
    }
    public function
}
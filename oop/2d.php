<?php
class Defstring {
    public static function rev_set ($str) {
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $reverse .= $str[$i];

        }
        return $reverse;
    }
}
$newstring = 'hello';

echo Defstring::rev_set($newstring);
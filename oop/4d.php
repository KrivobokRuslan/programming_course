<?php

class Data {
    public static function imp ($array) {
        $newvalue = '';
        foreach ($array as $value) {
            $newvalue .= strval($value);
        }
        return $newvalue;
    }

}
$t = [1, 2, 3, 4];
echo Data::imp($t);



$separator = '_';
$array = [1, 2, 3, 4];



echo implode($separator, $array);
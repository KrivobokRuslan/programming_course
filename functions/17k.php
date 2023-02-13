<?php // _array_flip — Меняет местами ключи с их значениями в массиве (['first' => 6, 'second' => 7, 'third' => 8, 'fourth' => 9];
 // => [6 => 'first', 7 => 'second', 8 => 'third', 9 => 'fourth'])
$m = ['first' => 6, 'second' => 7, 'third' => 8, 'fourth' => 10];
//function arflip ()
foreach ($m as $key => $item) {
    $n = $key;
    $key = $item;
    $item = $n;
    echo $key . "<br>";
    echo $item . "<br>";
}
?> //как правильно в ф-ции , наверное через return?
<?php
include "../../functions.php";

function _array_fill(int $startIndex = 0, int $count = 1, $value = null): array {
    $result = [];

    for ($i = 0; $i < $count; $i++, $startIndex++) {
        $result[$startIndex] = $value;
    }

    return $result;
}

$a = _array_fill(10, 3, 'hello');

function _in_array($searchValue, $data): bool {
    $result = false;

    foreach ($data as $k => $v) {
        if ($v == $searchValue) {
            $result = true;
            break;
        }
    }

    return $result;
}

$x = ["Mac", "NT", "Irix", "Linux"];

if (_in_array("Irix", $x)) {
    echo "Нашёл Irix";
}

function _array_search($searchValue, $data): ?int {
    $result = null;

    foreach ($data as $k => $v) {
        if ($v == $searchValue) {
            $result = $k;
            break;
        }
    }

    return $result;
}

echo '<br>';
$v = _array_search("Irix", $x);
echo '<br>';
echo $v;
echo '<br>';
echo $x[$v];

$s = ['first' => 6, 'second' => 7, 'third' => 8, 'fourth' => 9]; // => [0 => 6, 1 => 7, 2 => 8, 3 => 9]

function _array_values(array $array) : array
{
    $result = [];

    foreach ($array as $value) {
        $result[] = $value;
    }

    return $result;
}

$ff = _array_values($s); // [0 => 6, 1 => 7, 2 => 8, 3 => 9]

function _array_keys(array $array) : array
{
    $result = [];

    foreach ($array as $k => $v) {
        $result[] = $k;
    }

    return $result;
}

$gg = _array_keys($s); // [0 => 'first', 1 => 'second', 2 => 'third', 3 => 'fourth']

/**
 * 1) Написать функцию, которая возвращает квадрат числа
 * 2) Написать функцию, которая возвращает
 * 3) Сделайте функцию, которая отнимает от первого числа второе и делит на третье.
 * 4) Сделайте функцию, которая принимает параметром число от 1 до 7,
 * а возвращает день недели на русском языке.
 * 5) _array_flip — Меняет местами ключи с их значениями в массиве (['first' => 6, 'second' => 7, 'third' => 8,
 * 'fourth' => 9]; // => [6 => 'first', 7 => 'second', 8 => 'third', 9 => 'fourth'])
 * $a = [];
 * $a[67] = 'sadfgdsf';
 * $a['start'] = 345;
 * [67 => 'sadfgdsf', 'start' => 345]
 * 6) _array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс
 */

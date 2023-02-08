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
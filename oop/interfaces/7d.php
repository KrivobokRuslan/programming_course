<?php
//Вашим заданием будет создание сокращенного варианта ФИО.
//Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.

$person = "Ivanov Ivan Petrovych";

$newperson = explode(' ', $person); //если не было бы разделителя чем разделять?
$result = '';
$result1 = '';

for ($i = 0; $i < count($newperson); $i++) {
    if ($i == 0) {
        $result = $newperson[$i];
        continue;
    }

    $result = $result . ' ' . $newperson[$i][0] . '.';
}

echo  $result;

echo '<br>';

foreach ($newperson as $key => $value) {
    if ($key == 0) {
        $result1 = $value;
        continue;
    }

    $result1 = $result1 . ' ' . $value[0] . '.';
}

echo $result1;
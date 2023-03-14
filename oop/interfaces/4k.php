<?php //вычислить произведение тех элементов, которые больше ноля и у которых парные индексы
        //После вывести на экран элементы, которые больше ноля и у которых не парный индекс

$arr = [];

$min = 1;
$max = 100;
for ($i = 0; $i<6; $i++){  // создал массив со случайными числаси от 1 до 100 в кол-ве 6
    $arr[$i] = rand($min, $max);
    echo $arr[$i].', ';
}
echo '<br>';
foreach ($arr as $key => $item){ // вывод созданного массива
    echo 'key -'.$key.'=';
    echo $item.'<br>';
}
$productnum = 1; // переменная , содержащая произведение элементов с парными ключами
$mass = []; // массив , из элементов с непарными ключами
$a = 0;
foreach ($arr as $key => $item){ // проверка парный или нет
    if ($key % 2 ==0)
        $productnum *= $item;
    else {
        echo $key . ' = ' . $item . '<br>'; // элементы с непарными ключами
        $mass[$a] = $item;
        $a++;
    }
}
echo 'произведение равно  '.$productnum. '<br>';

function examination ($arr){
    $multiplication_result= 1;
    $a = 0;
    foreach ($arr as $key => $item){ // проверка парный или нет
        if ($key % 2 ==0)
            $multiplication_result *= $item; //перемножение парных элементов
        else {
            echo $key . ' = ' . $item . '<br>'; // элементы с непарными ключами
            $mass[$a] = $item;
            $a++;
        }
    }
    return $multiplication_result;
    //return $mass;
}

function outondispley ($mass)
{
for ($a = 0; $a < count($mass); $a++){
   echo $mass[$a].' , ';
}

}
echo 'povtor'.'<br>';
echo 'произведение =  '.examination ($arr);
echo '<br>'.'элементы с непарными ключами'.'<br>';
outondispley($mass);
?>
<?php  // elem mass backwards

// переписал через foreach
{
    function back(array $mass) // задаю sum функцию по массиву sum
    {

       foreach ($mass as $v){ //for ($i = count($mass) - 1; $i >= 0 ; $i--) {
            echo $v . '  ';  //виконання
        } // цикл для прокрутки елементов массива

    }
    $mass = [4, 5, 6, 10];
    back($mass);
}
?> //

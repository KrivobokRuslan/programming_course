<?php  // elem mass backwards

// $mass[] = 7;
{
    function back(array $mass) // задаю sum функцию по массиву sum
    {

        for ($i = count($mass) - 1; $i >= 0 ; $i--) {
            echo $mass[$i];  //виконання
        } // цикл для прокрутки елементов массива

    }
    $mass = [4, 5, 6];
    back($mass);
}
?> //

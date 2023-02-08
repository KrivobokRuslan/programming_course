<?php  // elem mass backwards

// $mass[] = 7;
{
    function back ($mass[]) // задаю sum функцию по массиву sum
    {

        for ($i = count($mass); $i >= 0 ; $i--) // цикл для прокрутки елементов массива
            echo $mass ($i);  //виконання
    }
    $mass = [4, 5, 6];
   back ($mass);
}
?> //

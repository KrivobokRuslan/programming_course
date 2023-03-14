<?php //количество прошедших часов по введенным пользователем градусах от 0 до 360
//  6 градусов = 1 деление = 12 мин времени
//1 час = 30 градусов
function what_time ($degree){
    $hour = 0;
    $minute = 0;
    $h = 30; //1 час

    $hour = floor($degree / $h) ; // нужен модуль числа, или  $degree / $h - $degree % $h. как еще можно?
    $minute = $degree*2 - $hour*60;

    echo "$hour h and  $minute min";
    /*return $hour;
    return $minute;*/ // уперся в вывод результата


}
what_time(74);
echo '<br>' ;
echo what_time(58);
 //как можно еще выводить результат работы ф-ции
?>
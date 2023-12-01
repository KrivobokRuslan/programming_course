<?php
/**
* 1 Если переменная $a равна 10, то выведите 'Верно', иначе выведите 'Неверно'
* 2 Задача. В переменной $min лежит число от 0 до 59.
* Определите в какую четверть часа попадает это число (в первую, вторую, третью или четвертую).
* 3 Если переменная $a равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
* 4 Если переменная $a больше нуля, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
* 5 Ето сли переменная $a меньше нуля, выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
* 6 Если переменная $a больше или равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
* 7 Если переменная $a меньше или равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
* 8 Если переменная $a не равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
* 9 Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 'test', 'тест', 3.
* 10 Если переменная $a равна '1' и по значению и по типу, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном '1', 1, 3.
* Работа с логическими переменными
* 11 Если переменная $var равна true, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $var, равном true, false. Напишите два варианта скрипта - с короткой записью и с длинной.
* 12 Если переменная $var НЕ равна true, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $var, равном true, false. Напишите два варианта скрипта - с короткой записью и с длинной.
* Работа с OR и AND
* 13 Если переменная $a больше нуля и меньше 5-ти, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 5, 0, -3, 2.
* 14 Если переменная $a равна нулю или равна двум, то прибавьте к ней 7, иначе поделите ее на 10. Выведите новое значение переменной на экран. Проверьте работу скрипта при $a, равном 5, 0, -3, 2.
* 15 Если переменная $a равна или меньше 1, а переменная $b больше или равна 3, то выведите сумму этих переменных, иначе выведите их разность (результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0 и 6, 3 и 5.
* 16 Если переменная $a больше 2-х и меньше 11-ти, или переменная $b больше или равна 6-ти и меньше 14-ти, то выведите 'Верно', в противном случае выведите 'Неверно'.
* На switch-case
* 17 Переменная $num может принимать одно из значений: 1, 2, 3 или 4. Если она имеет значение '1', то в переменную $result запишем 'зима', если имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case.
* Задачи
* 18 В переменной $day лежит какое-то число из интервала от 1 до 31. Определите в какую декаду месяца попадает это число (в первую, вторую или третью).
* 19 В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).
* 20 В переменной $year хранится год. Определите, является ли он високосным (в таком году есть 29 февраля). Год будет високосным в двух случаях: либо он делится на 4, но при этом не делится на 100, либо делится на 400. Так, годы 1700, 1800 и 1900 не являются високосными, так как они делятся на 100 и не делятся на 400. Годы 1600 и 2000 - високосные, так как они делятся на 400.
*/

$a = 1;
$b = 6;
$c = 10;
$d = 0;

/**
 *  .........123456...10...........
 */

$age = 18;

//if ($age >= 0 && $age < 3) {
//    echo 'немовля';
//} elseif ($age >= 3 && $age < 6) {
//    echo 'садочок';
//} elseif ($age >= 6 && $age < 18) {
//    echo 'школа';
//} elseif ($age >= 18 && $age < 65) {
//    echo 'робота';
//} else {
//    echo 'пенсія';
//}

//1 2 3 4 5 6 7
$day = 4;

switch ($day) {
    case 1:
        echo 'понеділок';
        break;
    case 2:
        echo 'вівторок';
        break;
    case 3:
        echo 'середа';
        break;
    case 4:
        echo 'четвер';
        break;
    case 5:
        echo 'пʼятниця';
        break;
    case 6:
        echo 'субота';
        break;
    case 7:
        echo 'неділя';
        break;
}

echo match ($day) {
    1 => 'понеділок',
    2 => 'вівторок',
    3 => 'середа',
    4 => 'четвер',
    5 => 'пʼятниця',
    6 => 'субота',
    7 => 'неділя',
};

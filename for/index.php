<?php
/**
 * 1) вывести на экран числа от 1 до 100
 * 2) вывести на экран числа от n до m (n та m - це любі числа)
 * 3) вывести на экран все четные числа от 1 до n
 * 4) заменить результат умножения n * 100 сложением
 * 5) вывести на экран строку '***' n раз
 * 6) попробовать нарисовать на экране фигуру
 *    xx
 *    xxxx
 *    xxxxxx
 *    xxxxxxxx
 *    xxxxxxxxxx
 * 7) вивести суму чисел від 2 до 5
 * 8) вивести різницю чисел від 5 до -5
 * 9) потрібно ділити 1000 на 2 поки результат не буде менше 50. Вивсети кількість ділень.
 * 10) Необхідно вивести на екран числа від 5 до 1
 * 11) Необхідно вивести на екран таблицю множення на 3
 * 12) Необхідно вивести повну на екран таблицю множення
 * 13) Необхідно щоб програма виводила на екран вот таку послідовність: 7 14 21 28 35 42 49 56 63 70 77 84 91 98
 * 14) Необхідно щоб програма виводила на екран вот таку послідовність: 1 2 4 8 16 32 64 128 256 512
 * 15) Необхідно написати програму, яка буде малювати зіроньки ось таким чином:
 *                * * * * *
 *                * * * * *
 *                * * * * *
 * 16) Вивести слова "Я вмію використовувати цикли" 10 разів
 *
 * як зрозуміти що число чотне:
 *
 *  3 * 1 = 3
 *  3 * 2 = 6
 *  ...
 *  3 * 10 = 30
 */

for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 == 0) {
        break;
    }

    echo $i . "<br>";
}
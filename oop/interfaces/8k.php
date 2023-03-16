<?php //разработать программу, которая проверяла бы введенное пользователем число (год).
// Число может быть в диапазоне от 1 до 9999.
function leap_year ($year) //: str :int  ???
{
    if ($year % 4 == 0)
    {
        $a = 'leap year';
    }
    else
        $a = "non-leap year";
    return $a;
}
echo leap_year(2024);
?>
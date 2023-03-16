<?php // 15.03 Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.
function mass ($text) //: str
{
    for ($i = 0; $i < strlen($text); $i++) {
        $mass [$i] = $text[$i];
        return $mass;
    }
}
echo "Bezukh  ";
$a =  mass('Ivan');
echo "$a[0] .";
$patronymic = mass("Sergeevich");
echo "$patronymic[0].";
 ?>
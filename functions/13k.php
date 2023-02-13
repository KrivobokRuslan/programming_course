<?php // ф-ция отнимает от первого и делит на третье
function calc ($i, $a, $b)
{
    $rescalc = ($i - $a) / $b;
    echo $rescalc. "<br>";
}
calc(9,3,2);
?> //(9-3)/2=3
<?php // func count , echo ($mass[1] * $mass [2])
function _count(array $data): int {
    $i = 0;

    foreach ($data as $item) {
        $i++;
    }

    return $i;}
    $mass = [2,3,10];
     $q = 1;
for ($n = 0; $n < _count($mass); $n++)
{

    $q = $q * $mass[$n];
    }
    echo $q;
?>

<?php // китайский календарь . вводим год не менее 1924, программа выдает какому животному соответствует
function china_calendar ($year){
    $a = 0;
    $y = 0;
    $x = 0; // $ yearnames ??
$arr = [1=>'крыса','бык','тигр','кролик','дракон','змея','лошадь','овца','обезьяна','петух','собака','свинья'];
    if ($year < 1924)
    {
        echo "incorrect input";
    }
        else{
        $a = ($year - 1924);
        $y = floor($a / 24) ;
       $y = $a - $y*24;

    }
        for ($i=1; $i<=count($arr);$i++ ){
            if ($i=$y){
                $x = $arr[$i];
            }
        }
    return $x;
}
echo china_calendar(1951);
?>
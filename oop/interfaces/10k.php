<?php // китайский календарь . вводим год не менее 1924, программа выдает какому животному соответствует
function china_calendar ($year) : string {
    $a = 0;
    $y = 0;
    $arr = [1=>'крыса','бык','тигр','кролик','дракон','змея','лошадь','овца','обезьяна','петух','собака','свинья'];

    if ($year < 1924) {
        echo "incorrect input";
    } else {
        $a = ($year - 1924);
        $y = floor($a / 12);
        $y = $a - $y*12;
    }
    return  $arr[$y];
    }
echo china_calendar(1964);
?>



<?php
class ChinaCalendar {
    function __construct(public int $year)
    {
    }
    function examination () //: string
    {
    $yea = $this->year;
        $a = 0;
        $y = 0;
        $arr = [1=>'крыса','бык','тигр','кролик','дракон','змея','лошадь','овца','обезьяна','петух','собака','свинья'];

        if ($yea < 1924) {
            echo "incorrect input";
        }
        else {
            $a = ($yea - 1924);
            $y = floor($a / 12);
            $y = $a - $y*12;
        }
        return  $arr[$y];
    }
}
$final = new ChinaCalendar(1926); // 1922 Undefined array key 0 in /var/www/html/course/oop/interfaces/10k.php on line 40
echo '<br>'. " for class".'<br>';
echo $final->examination();
?>
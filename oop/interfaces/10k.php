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
    private array $map = [
        1=>'крыса',
        'бык',
        'тигр',
        'кролик',
        'дракон',
        'змея',
        'лошадь',
        'овца',
        'обезьяна',
        'петух',
        'собака',
        'свинья'
    ];

    function __construct(public int $year)
    {
    }
    public function examination () //: string
    {
        $y = 0;

        if ($this->year < 1924) {
            echo "incorrect input";
        }
        else {
            $a = ($this->year - 1924);
            $y = floor($a / 12);
            $y = $a - $y*12;
        }

        return  $this->map[$y];
    }
}
$final = new ChinaCalendar(1926); // 1922 Undefined array key 0 in /var/www/html/course/oop/interfaces/10k.php on line 40
echo '<br>'. " for class".'<br>';
echo $final->examination();
?>
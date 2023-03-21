<?php // вычислить сумму цифр, из которого состоит число  и сколько раз встречается цифра...
function enumeration($n, $x)
{
    $sum = 0;
    $a = 0;

    for ($i = 0; $i < strlen($n); $i++) {
        $sum += $n[$i];
        if ( $n[$i]== $x) {
            $a++;
        }
    }
    //return $n;
   // return $x;
   // return $a;
    echo "orignumber = $n".'<br>';
    echo "sumnumber = $sum".'<br>';
    echo "$x встречается - $a раз";
}
//echo "Число: {$n}\n";
//echo "Сумма: {$s}";
enumeration ("14256585458354", 4);
echo "<br>";

class Enumaration {
    public function __construct(private int $number, private int $numberForCount) {}

    public function getSum(): int
    {
        $sum = 0;
        $str = (string)$this->number;

        for ($i = 0; $i < strlen($str); $i++) {
            $sum += (int)$str[$i];
        }

        return $sum;
    }

    public function getCount(): int
    {
        $a = 0;
        $str = (string)$this->number;

        for ($i = 0; $i < strlen($str); $i++) {
            if ( $str[$i]== $this->numberForCount) {
                $a++;
            }
        }

        return $a;
    }
}

/*class Enumaration1 {
    private int $number;
    private int $numberForCount;
    public function __construct(int $number, int $numberForCount) {
        $this->number = $number;
        $this->numberForCount = $numberForCount;
    }
}*/

$enum = new Enumaration(14256585458354, 4);
echo $enum->getSum();
echo '<br>';
echo $enum->getCount();

?>

<?php
class CopyEnumaration
{
    public function __construct(private int $cnumber, private int $cdigit)
    {
    }

    public function bust_a_sum()
    {
        $st = (string)$this->cnumber;
        $numoftimes = $this->cdigit;
        $csum = 0;
        $repeat = 0;
        for ($i = 0; $i < strlen($st); $i++) {
            $csum += $st[$i];
            if ($st[$i] == $numoftimes ){
            $repeat++;
            }
        }
        echo 'repeat - '.$repeat.'<br>';
        return $csum;
    }
}
$final = new CopyEnumaration(22222222223, 3);
echo '<br>'.'my'.'<br>';
echo 'sum = '.$final->bust_a_sum();
?>


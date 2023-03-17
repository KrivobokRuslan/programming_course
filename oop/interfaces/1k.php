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
enumeration ("14256585458354", 8);
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

class Enumaration1 {
    private int $number;
    private int $numberForCount;
    public function __construct(int $number, int $numberForCount) {
        $this->number = $number;
        $this->numberForCount = $numberForCount;
    }
}

$enum = new Enumaration(23413454356234, 4);
echo $enum->getSum();
echo '<br>';
echo $enum->getCount();

?>

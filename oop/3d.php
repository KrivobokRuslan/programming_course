<?php
//strpos
class Numbers {
    public static function instring ($nums, $needle) {
        $sum = 0;
        for ($i = 0; $i < strlen($nums); $i++) {
            $sum++;
            if ($nums[$i] == $needle) {
                break;
            }
        }
        return $sum;
    }

}
//$pos = mb_str_split($nums);
//foreach ($pos as $positions) {
//    print_r($positions);}


$a = 'r4h5j5k8';
$b = 'j';
echo Numbers::instring($a, $b);
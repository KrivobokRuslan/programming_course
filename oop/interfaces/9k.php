<?php


function playing_cards ($number) {
    $arr = [7=>7,8=>8,9=>9,10=>10,11=>'valet',12=>'dama',13=>'korol', 14=>'tuz'];
    $a = 0;
    for ($i=7; $i< count($arr); $i++){
        if ($i = $number){ // if == for 0?
            $a =  $arr[$i];
        }
    }
    return $a;
}
 //$cart =
echo playing_cards(12);//$cart;
?>
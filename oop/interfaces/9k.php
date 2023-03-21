<?php


function playing_cards ($number) {
    $arr = [7 => 7, 8, 9, 10, 'valet', 'dama', 'korol', 'tuz'];


        if ($number < 7 && $number > 14){
            break;
            echo 'incorrect input';
    }
    return $arr[$number];
}
 //$cart =
echo playing_cards(9);//$cart;
?>
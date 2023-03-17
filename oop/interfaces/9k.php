<?php


function playing_cards ($number) {
    $arr = [7 => 7, 8, 9, 10, 'valet', 'dama', 'korol', 'tuz'];

    return $arr[$number];
}
 //$cart =
echo playing_cards(12);//$cart;
?>
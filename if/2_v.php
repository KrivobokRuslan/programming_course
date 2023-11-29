<?php
$min=50;
if($min>0 && $min<15){
    echo "Перша";
} elseif ($min>=15 && $min<30){
    echo "Друга";
} elseif ($min>=30 && $min<45){
    echo "Третя";
} elseif ($min>=45 && $min<60){
    echo "Четвертя"; 
}
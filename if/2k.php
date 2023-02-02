<?php
$b=177;
if ($b>60)
    echo "error invalid value";
elseif ($b<=14)
    echo "variable from the first quarter";
elseif ($b>=15 && $b<=29)
    echo "variable from the second quarter";
elseif ($b>=30 && $b<=44)
    echo "variable from the third quarter";
else
     echo "variable from the fourth quarter";
      ?>



<?php  // function count
    function coun ($mass)
    {

        for ($i = 0; $mass($i) != null ; $i++)
            $c = $c++;
        return $c;
    }
$mass = [4, 5, 6];
    coun ($mass);
echo  $c;

?>
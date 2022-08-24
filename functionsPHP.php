<!--
    Keegan Jones
    CSD - 440

    * PHP fuctions kept in seperate file.
--> 

<?php

    function sum($var1, $var2)
    {
        $var1 = rand($var1, $var2);
        $var2 = rand($var1, $var2);
        return $var1 + $var2;
    }
?>
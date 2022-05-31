<?php
$my_array = array("HunterxHunter", "FMAB", "Dragon-ball");

list($a, $b, $c) = $my_array;
echo "I have watched several anime, like $a,  $b, and $c <br><br>";

list($x, , $y) = $my_array;
echo "Here I only use the $x and $y variables.";
?>
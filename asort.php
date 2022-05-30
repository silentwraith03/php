<?php
$students = array("Yatin"=>23, "Gaurav"=>21, "Tushar"=>18, "Bhavya"=>24, "Sumit"=>25, "Harsh"=>17);
echo "<br><b>Array before sort:</b><br>";
foreach($students as $val=> $x)
        echo "$val => $x<br>";
asort($students);
// use ksort, asort, krsort
echo "<br><b>Array after using asort() functions:</b><br>";
foreach($students as $val=>$x)
        echo "$val=>$x<br>";

?>
<?php
$students = array("Yatin", "Gaurav", "Tushar", "Bhavya", "Sumit", "Harsh");
echo "<br><b>Array before sort:</b><br>";
foreach($students as $val)
        echo "$val<br>";
sort($students);
echo "<br><b>Array after using sort() functions:</b><br>";
foreach($students as $val)
        echo "$val<br>";
        
?>
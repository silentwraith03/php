<?php
$fp = fopen('data.txt','a'); //opens file in append mode
fwrite($fp,'hehe');
fwrite($fp,'Konbanwa');
fclose($fp);

echo "Bored";
?>

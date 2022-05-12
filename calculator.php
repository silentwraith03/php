<?php
$a = 10;
$b = 20;
$operator = '+';

switch($operator){
    case '+':{
        echo("Sum of a and b is". $a+$b);
        break;
    }
    case '-':{
        echo("Difference of a and b is". $a-$b);
        break;
    }    case '*':{
        echo("Product of a and b is". $a*$b);
        break;
    }    case '/':{
        echo("Division of a and b is". $a/$b);
        break;
    }
        default:{
            echo "WRONG OPPERATOR!";
        }
}
?>
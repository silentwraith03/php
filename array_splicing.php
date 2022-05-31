<?php
$input1 = array("apple", "banana", "orange", "mango", "papaya", "kiwi");
$replacement1 = array("lemon", "carrot", "corn");
print_r("<br>Example 1<br>");
//Performing array splice
$result1 = array_splice($input1,2,3, $replacement1);
print_r($result1);
print_r("<br>");
print_r($input1);

print_r("<br><br>Example2<br>");
$input2 = array("red", "green", "blue", "pink", "yellow", "black");

//Performing array splice
$result2 = array_splice($input2,3,2);
print_r($result2);
print_r("<br>");
print_r($input2);

print_r("<br><br>Example3<br>");
$input3 = array("red", "green", "blue", "pink", "yellow", "black");

//Performing array splice
$result3 = array_splice($input3,-4,-1);
print_r($result3);
print_r("<br>");
print_r($input3);

print_r("<br><br>Example4<br>");
$input4 = array("red", "green", "blue", "pink", "yellow", "black");

//Performing array splice
$result4 = array_splice($input4,2);
print_r($result4);
print_r("<br>");
print_r($input4);

print_r("<br><br>Example5<br>");
$input5 = array("red", "green", "blue", "pink", "yellow", "black");
$replacement5 = array("purple", "maroon", "violet");

//Performing array splice
$result5 = array_splice($input5,2,0, $replacement5);
print_r($result5);
print_r("<br>");
print_r($input5);

?>


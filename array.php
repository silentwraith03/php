<?php
$x = array(7, 9, 0, 6);
$len=count($x);

for($i=0; $i<$len; $i++)
{
    echo "$x[$i]";
}
for($i=0; $i<$len; $i++)
{
    for($j=$i+1;$j<$len;$j++)
    {
        if($x[$i]==$x[$j])
        {
            echo "Duplicate element is ". $x[$i];
        }
    }
}
?>

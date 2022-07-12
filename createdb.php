<?php
$conn=mysqli_connect("localhost","root","");
$db_name = "CREATE DATABASE kunal0008";

if(mysqli_query($conn, $db_name))
{
    echo "Database created";
   
$sql="CREATE TABLE stud1(name1 varchar(10), age int, city varchar(15));";
$conn=mysqli_connect("localhost","root","","kunal0008");
if(mysqli_query($conn, $sql))
{
    echo "Table created";
$sql="INSERT INTO stud1 VALUES('Kunal', 19, 'Delhi');";
$conn=mysqli_connect("localhost","root","","kunal0008");
if(mysqli_query($conn, $sql))
{
    echo "Inserted successfully";
}
else{
    echo "Insertion failed";
}
}
else{
    echo "Table not created";
}
}

else
{
    echo"Failed to create database";
}
mysqli_close($conn);

?>

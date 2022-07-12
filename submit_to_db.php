<html>
    <head>
        <form action="" method="POST">
            Name: <input type="text" name="sname"/><br>
            Age: <input type="text" name="sage"/><br>
            City: <input type="text" name="scity"/><br>
            <input type="submit" value="Submit"/>
</form>
</head>
<?php
if(count($_POST)>0)
{
echo $_POST["sname"];
echo $_POST["sage"];
echo $_POST["scity"];
}
?>
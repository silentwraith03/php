<?php
// START THE SESSION
session_start();
// SET session variables
$_SESSION["favseries"]= "BREAKING BAD";
$_SESSION["favanime"]= "Code Geass";
echo "Session variables are set.";
?>
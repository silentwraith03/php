<?php
session_start();

// Echo session variables that were set on previous page
echo "Favourite series is " .$_SESSION["favseries"].".<br>";
echo "Favourite anime is " .$_SESSION["favanime"].".";

?>
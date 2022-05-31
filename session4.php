<?php
// Modify a session variable
session_start();

// to change a session variable, just overwrite it
$_SESSION["favseries"] = "Squid Game";
print_r($_SESSION);
?>
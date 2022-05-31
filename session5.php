<?php
// Destroy the session and variables
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();
echo "SESSION EXPIRED!!";

?>
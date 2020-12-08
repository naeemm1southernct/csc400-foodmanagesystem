<?php
session_start(); 
session_destroy(); // End session
header("location:index.php"); 
?>


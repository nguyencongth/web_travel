<?php
session_start(); 
$_SESSION = array();
unset($_SESSION['alogin']);
session_destroy(); 
header("location:index.php"); 
?>
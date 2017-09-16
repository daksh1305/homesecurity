<?php
session_start();//starting session
//set session variables
$_SESSION["username"]=$_POST['username'];
$_SESSION["password"]=$_POST['password'];
header("Location: check_adminlogin.php");
die();
?>

<?php

session_start();

if(($_SESSION["username"]) == ""){
	header("Location: login.php");
	die();
}

$newusername=$_POST['new_username'];
$newpassword=$_POST['new_password'];

$username = "root";
$password = "root";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("testwebsite",$dbhandle) 
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("INSERT INTO user VALUES('$newusername','$newpassword')");

//fetch tha data from the database 
//while ($row = mysql_fetch_array($result)) {
//  echo $row{'username'}."<br>"; //Checking
        $_SESSION["message_insert"]="New User Created";
	header("Location: admin_registeruser.php");
	die();




//close the connection
mysql_close($dbhandle);

?>

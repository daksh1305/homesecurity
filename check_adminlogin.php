<?php

session_start();

if(($_SESSION["username"]) == ""){
	header("Location: login.php");
	die();
}


// Show a particular value.
$id = $_SESSION["username"];
$pass = $_SESSION["password"];




$username = "root";
$password = "raspberry";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("testwebsite",$dbhandle) 
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT username,password FROM admin_user");

//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
  //echo $row{'username'}."<br>"; //Checking



if($id == $row{'username'} && $pass == $row{'password'})
{
	header("Location: adminhome.php");
	die();
}
else
{
	$_SESSION["message"]="invalid username or password";
	header("Location: login.php");
	die();
}



}

//close the connection
mysql_close($dbhandle);






?>

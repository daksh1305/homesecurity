<?php

session_start();

if(($_SESSION["username"]) == ""){
	header("Location: login.php");
	die();
}


// Show a particular value.
$id = $_SESSION["username"];
$pass = $_SESSION["password"];
$deleteuser = $_POST['username'];



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
$result = mysql_query("SELECT username,password FROM user");

//fetch tha data from the database 
//while ($row = mysql_fetch_array($result)) {
//  echo $row{'username'}."<br>"; //Checking



if($deleteuser == $row{'username'})
{       
        $result = mysql_query("DELETE FROM user WHERE username = $deleteuser");
	$_SESSION["message_delete"] ="user deleted";
        header("Location: admin_viewuser.php");
	die();
}
else
{
	$_SESSION["message_delete"]="invalid username";
	header("Location: admin_viewuser.php");
	die();
}



//}

//close the connection
mysql_close($dbhandle);




?>
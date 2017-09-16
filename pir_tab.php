<?php
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
$result = mysql_query("SELECT created_date FROM pir_tab");

//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
  echo $row{'created_date'}."<br>"; //display the results

}

//close the connection
mysql_close($dbhandle);
?>

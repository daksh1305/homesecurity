<html> 
    <head>
    </head>
    <body>
        <div id="userlist">
            <?php
            $username = "root";
            $password = "raspberry";
            $hostname = "localhost";

//connection to the database
            $dbhandle = mysql_connect($hostname, $username, $password)
                    or die("Unable to connect to MySQL");
            echo "Connected to MySQL<br>";

//select a database to work with
            $selected = mysql_select_db("testwebsite", $dbhandle)
                    or die("Could not select examples");

//execute the SQL query and return records
            $result = mysql_query("SELECT username FROM user");

//fetch tha data from the database 
            while ($row = mysql_fetch_array($result)) {
                ?>
                <table>
                    <tr>
                        <?php
                        echo $row{'username'} . "<br>"; //display the results
                        ?>
                    </tr>
                </table>    
                <?php
            }

//close the connection
            mysql_close($dbhandle);
            ?>
        </div>
        <div id="delete_user">
            <h3>Delete User</h3>
            <form action = "deleteuser.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <label for="User">Enter Username <label/>
                        </td>
                        <td>
                            <input type="text" id="userdelete" name="userdelete" required>
                        </td>
                        <td>
                            <input	 type="submit"	value="Delete"	name="Delete">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            echo $_SESSION["message_delete"];
                            ?>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
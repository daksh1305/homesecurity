<html>
    <head>
        <title>Register User</title>
    </head>
    <body>
        <h2>Create New User</h2>
        <div id="register">
        <form method="POST" action="registeruser.php">
            <table>
                <tr>
                    <td><label for="User">Username:<label/></td>
                    <td><input type="text" id="new_username" name="new_username" required></td>
                </tr>
                <tr>
                    <td><label for="Pass">Password:<label/></td>
                    <td><input type="password" id="new_password" name="new_password" required></td>
                </tr>
                <tr>

                    <td><input	 type="submit"	value="Create"	name="Create"></td>
                </tr>
                <tr>
                    <?php
                        echo $_SESSION["message_insert"];
                    ?>
                </tr>
            </table>    
        </form>
        </div>
    </body>
</html>
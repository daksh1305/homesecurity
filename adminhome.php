<html>
    <head>
        <title>
            Admin Home
        </title>
    </head>
    <body>
        <?php
        session_start();

        if (($_SESSION["username"]) == "") {
            header("Location: login.php");
            die();
        }

        echo "HI " . $SESSION["username"]
        ?>
        <a href="adminhome.php">Home</a><br>
        <a href="">Profile</a><br>
        <a href="pir_tab.php">Pir Status</a><br>
        <a href="mq2_tab.php">Gas Status</a><br>
        <a href="admin_registeruser.php">Create User</a><br>
        <a href="admin_viewuser.php">Manage Users</a><br>
        
        
    </body>
</html>

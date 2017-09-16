<!DOCTYPE html>
<?php
session_start();

if(($_SESSION["username"]) == ""){
	header("Location: login.php");
	die();
}

?>

<html>
	<head>
		<title>
			LogIn
		</title>
		
	</head>
	<body>
		<div>
			<div id="login">
				<form method="post" action="session.php">
					<table>
					<tr>
				<td><label for="User">Username:<label/></td><td><input type="text" id="username" name="username" required></td>
					</tr>
					<tr>
				<td><label for="Pass">Password:<label/></td><td><input type="password" id="password" name="password" required></td>
					</tr>
					<tr>
					
					<td><input	 type="submit"	value="Login"	name="Login"></td>
					</tr>
					</table>
					<?php
					echo $_SESSION["message"];
					session_destroy();
					?>
				</form>
			</div>
			
		</div>
	</body>
</html>

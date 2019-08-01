<?php
spl_autoload_register(function($class){
	require_once("class/".$class.".php");
});

$obj = new Db()
?>


<!DOCTYPE html>
<html>
<head>
	<title>This form</title>
</head>
<body>
	<form action="system/formaction.php" method="POST">
	<table>	
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr><td><input type="submit" name="create" value="submit"></td></tr>
	</table>	
	</form>
</body>
</html>
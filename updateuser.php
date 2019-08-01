
<?php
spl_autoload_register(function($class){
	require_once "class/".$class.".php";
});
?>	
<!DOCTYPE html>
<html>
<head>
	<title>This is up date form form</title>
</head>
<body>

<?php

$obj = new UpdateUser();

	if (isset($_GET['action']) && $_GET['action'] =='edit') {
		
		$id =(int)$_GET['id'];
		$result = $obj->updatebyId($id);
		
?>

	<form action="" method="POST">
	<table>	
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="<?php echo $result['name']?>"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" value="<?php echo $result['email']; ?>"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" value="<?php echo $result['password']?>"></td>
		</tr>
		<tr><td><input type="submit" name="update" value="Update"></td></tr>
	</table>	
	</form>
<?php } ?>
</body>
</html>
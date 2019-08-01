<?php
spl_autoload_register(function($class){
	require_once("../class/".$class.".php");
});

$ins = new Insert();

	if(isset($_POST['create'])){

		$name  = $_POST['name'];
		$email = $_POST['email'];
		$pass  = $_POST['password'];

		$ins->setName($name);
		$ins->setEmail($email);
		$ins->setPass($pass);

		if($ins->insertData()){
			echo "Data inserted successfully.";
			#$_SESSION['msg']="Data isset"
		}
	}

?>
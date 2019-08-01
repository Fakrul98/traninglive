<?php
spl_autoload_register(function($class){
	require_once "class/".$class.".php";
});

$obj = new student();

foreach ($obj->readAll() as $key => $value) {
?>
<tr>

	<td><?php echo $value['name']."</br>";?></td>
	</td> <?php echo $value['email']."</br>";?></td></tr>
<?php
}

?>
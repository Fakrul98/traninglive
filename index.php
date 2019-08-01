<?php
spl_autoload_register(function($class){
	require_once "class/".$class.".php";
});

$obj = new student();


?>
<table border="1">
	<tr>
		<td>Serial</td>
		<td>Name</td>
		<td>Email</td>
		<td>Action</td>
	</tr>

	<?php 
	$i = 0;
	foreach ($obj->readAll() as $key => $value) { 
		$i++;
	?>
	
<tr>
	<td><?php echo $i ;?></td>
	<td><?php echo $value['name'];?></td>
	<td><?php echo $value['email'];?></td>
	<td><a href="">update</a>||<a href="">Delete</a></td>
</tr> 
<?php
}
?>
</table>	



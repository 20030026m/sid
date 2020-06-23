<?php 
	require("CRUD/class/Consultas.php");
	$usuarios = usuarios::singleton();
	$valor1=$_GET['m1'];
	$valor2=$_GET['m2'];
	$valor3=$_GET['m3'];
	$data = $usuarios->update_datos($valor1,$valor2,$valor3);
	echo "ok";
 ?>
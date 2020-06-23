<?php  
//Recibe datos de 'vadmin.php' para eliminar un usuario
	require("CRUD/class/Consultas.php");
	$usuarios = usuarios::singleton();
     $valor1=$_GET['v1'];
     $data =$usuarios->delete_U($valor1);
     echo "ok";
?>
<?php  
// Recibe datos de 'vadmin.php' para editar algun usuario
	require("CRUD/class/Consultas.php");
	$usuarios = usuarios::singleton();
     $valor1=$_GET['v1'];
     $valor2=$_GET['v2'];
     $valor3=$_GET['v3'];
     $valor4=$_GET['v4'];
     $data =$usuarios->update_U($valor1,$valor2,$valor3,$valor4);
     echo "ok";
?>
<?php
//RECIBE LOS DATOS NECESARIOS PARA REGISTRAR EL USUARIO EN LA BASE DE DATOS
    require("CRUD/class/Consultas.php");
		$usuarios = Usuarios::singleton();
		$usu = $_POST['usuario'];
		$contra = $_POST['contrasena'];
		$data = $usuarios->insert_U($usu, $contra);
        header( "Location: login.php");
?>
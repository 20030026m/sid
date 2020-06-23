<?php 	
// Destuye la sesion de usuario y redirecciona a la pagina principal
session_start();
session_destroy();
header("Location:index.php"); 
?>

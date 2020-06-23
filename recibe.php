<?php
//VERIFICA QUE EL USUARIO SE ENCUENTRE EN LA BASE DE DATOS PARA PODER INICIAR SESION, SI NO EXISTE SE REDIRIGE A LA PAGINA PRINCIPAL
  session_start();
	//if(isset($_POST['usuario'])){
		require("CRUD/class/Consultas.php");
		$usuarios = new Consultas();
		$usu = $_POST['usuario'];
		$contra = $_POST['contrasena'];
		$data = $usuarios->get_Usuario($usu, $contra);

	if (count($data)) {
	
        foreach ($data as $fila) {
			$privilegio=$fila["privi"];          	
        }
    }

		if($privilegio == 1){
			$_SESSION['username'] = $usu;
			$_SESSION['privi'] = $privilegio;
			header("Location: items.php");
		}else if($privilegio == 2){
			$_SESSION['username'] = $usu;
			$_SESSION['privi'] = $privilegio;
			header("Location: index3.php");
		}else if($privilegio == 5){
			$_SESSION['username'] = $usu;
			$_SESSION['privi'] = $privilegio;
			header("Location: vadmin.php");
			
		}else{
			echo "<h1>datos incorrectos</h1><br> ";
    		echo "<a href='login.php'>Volver</a>";
		}
	//}
?>
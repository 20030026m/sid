<?php
//CODIGO NECESARIO PARA EL INICIO DE SESION DE LA PAGINA
//Include EL CONECTOR A GMAIL https://console.developers.google.com
include_once 'gpConfig.php';
//VERIFICANDO SI YA SE LOGUEO
$errorNI="";
if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

$output="";
if ( $gClient->getAccessToken() ) { //SE HA LOGUEADO
	//Get user profile data from google
	
	$gpUserProfile = $google_oauthV2->userinfo->get();
	//RESCATANDO CORREO ELECTRÓNICO
	$email = $gpUserProfile[ 'email' ];
	//SEPARANDO POR EL @
	$cade=explode ("@",$email);
	$p1=$cade[0];
	$p2=$cade[1];
	$errorNI="";
	//PRIMERO SE VALIDA POR DOMINIO DE CORREO ELECTRÓNICO
	if($p2!="itesa.edu.mx"){
		$errorNI="No es correo de ITESA";	
		$authUrl = $gClient->createAuthUrl();
		$output = '<a href="' . filter_var( $authUrl, FILTER_SANITIZE_URL ) . '"><img src="images/gmail.png" alt=""/></a>';
	}else{
		//SI SE PUEDE LOGUEAR YA SOLO QUEDA HACER OTRAS VALIDACIONES PARA PODER INGRESAR
		//SE PUEDE HACER CONSULTA A BASE DE DATOS Y VERIFICAR USUARIO
		if($p1 == "16030573"){
			header('Location: index2.php');	
		}else{
			$errorNI="NO TE ENCUENTRAS EN LA BASE DE DATOS DE ...";
			$authUrl = $gClient->createAuthUrl();
			$output = '<a href="' . filter_var( $authUrl, FILTER_SANITIZE_URL ) . '"><img src="images/gmail.png" alt=""/></a>';
		}
		
	}
	//echo( $email );

} else { //SI NO SE LOGUEO PIDE QUE SE LOGUEE
	$authUrl = $gClient->createAuthUrl();
	$output = '<a href="' . filter_var( $authUrl, FILTER_SANITIZE_URL ) . '"><img src="img/gmail.png" alt=""/></a>';
}
?>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>LOGIN ...</title>
	<style type="text/css">
		h3 {
			font-family: Arial, Helvetica, sans-serif;
		}
		#externo{
			border: 2px solid #050505;
						
			color: white;
			text-align: center;
			padding: 20px;
			border-radius: 30px;
			margin: 50 auto;
			height: auto;
			width: 400px;
			
			background-color: #51CC16;
		}
		
		#interno{
			color: white;
			margin: 0 auto;
			height: auto;
			padding: 10px;
			width: 300px;
		}
		
		img{
			height: 70px;
			width: 70px;
			
		}
	</style>
</head>

<body>
<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<script>
if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var comandos = {
    'contacto': function() {
      window.location.href = "Contactar/Contacto1.php";
    }



  };
  var comandos1 = {
    'inicio': function() {
      window.location.href = "index.php";
    }



  };

  // Add our commands to annyang
  	annyang.addCommands(comandos);
  	annyang.addCommands(comandos1);
	annyang.setLanguage("es-MX");
  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}
</script>

	<div id="externo">
		<h2>Acceso Recomendador de ITEMS</h2>
		<h3>LOGIN</h3>
		<img src="img/UsuarioImg.png" alt="">
		<br><br>
		<form action="recibe.php" method="POST">
			<input type="text" name="usuario" placeholder="Usuario" autocomplete="off" required >
			<br><br>
			<input type="password" name="contrasena" placeholder="Contraseña" autocomplete="off" required>
			<br><br>
			<button>Ingresar</button>
		</form>
		<!--<div id="interno">
		    <form action="Registro.php">
		    <div>Aun no tienes una cuenta?
		    <br>
		    <br>
		    Registrate
		    <br>
		    <br>
		    <button >Registrar</button></div>
		    </form>
		    
			<h4>INICIA CON GOOGLE </h4><?php echo $output; ?>
		</div>-->
		<h4><?php echo $errorNI; ?></h4>
	</div>
</body>

</html>

<html>
<!--- Pagina para registrar un usuario nuevo en la base de datos --->    

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>LOGIN ...</title>
	<script src="js/jquery.js"></script>
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
		<h2>ITESA</h2>
		<h3>LOGIN</h3>
		<img src="img/UsuarioImg.png" alt="">
		<br><br>
		<form action="recibe1.php" method="POST">
			Usuario<input type="text" name="usuario" placeholder="Usuario" required>
			<br><br>
			Contraseña<input id="pass" type="password" name="contrasena" placeholder="Contraseña" required>
			<br><br>
			Confirmar
			Contraseña<input id="re_pass" type="password" placeholder="Contraseña" required>
			<br><br>
			<button id="reg">Registrar</button>
		</form>
		<div id="interno">
		<?php echo $output; ?>
		</div>
		<h4><?php echo $errorNI; ?></h4>
	</div>
</body>
 <script>
        $("#reg").on("click", function(){
            var tres=$("#pass")[0].value;
            var cuatro=$("#re_pass")[0].value;
            if(tres===cuatro){
                alert("Si conciden");
            }
            else{
                alert("No coinciden");
            }
            //var nameU=$("#usuario")[0].value;

            //$.get("RecibePedido.php?v1="+nped+"&v2="+prec+"&v3="+nameU, function(data){
             // if (data == "ok")
              //  alert("Pedido realizado");

             // else 
               // alert("Pedido no realizado");
             

            //});
        });
    </script>

</html>
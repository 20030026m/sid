<?php  
// Vista de administrador: Muestra una tabla con los usuarios existentes asi como sus privilegios
    session_start();
    $sesion = $_SESSION['username'];
    $sesionP = $_SESSION['privi'];
    if(!isset($sesion)){
        header("location: index.php");
    }else{
        if($sesionP != 5){header("location: index.php");}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Instrumentaciones Didácticas</title>
		<script src="js/jquery.js"></script>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<!-- <link rel="stylesheet" href="css/settings.css" media="screen" /> -->
		<link href="css/flexslider.css" rel="stylesheet">
		<!-- Pretty Photo -->
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<!-- Color Stylesheet - orange, blue, pink, brown, red or green-->
		<link href="css/green.css" rel="stylesheet"> 
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon/favicon.png">
		<link rel="stylesheet"  href="css/caja.css">
    	<link rel="stylesheet"  href="css/estilo.css">
	</head>
	
	<body>

		<!-- Header starts -->
		<header>
		   <div class="container">
			  <div class="row">
				 <div class="col-md-12 col-sm-12">
					<!-- Logo and site link -->
					<div class="logo">
					   <h1><a href="index.html">Instrumentaciones Didacticas</a></h1>
					</div>
				 </div>
				
				 </div>
			  </div>
		   </div>
		</header>
		<!--/ Header ends -->

		<!-- Navigation Starts -->
		<!-- Note down the syntax before editing. It is the default twitter bootstrap navigation -->
		
				 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light " id="ftco-navbar">
    <div class="container">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse " id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        <li class="dropdown ">



							<a style="color: white;" href="#" ><a style="color: white;" href="#">Inicio |</a></a>
							
						</li>
						<!-- Navigation with sub menu. Please note down the syntax before you need. Each and every link is important. -->
						
						<li class="dropdown ">
							<a style="color: white;" href="" ><a style="color: white;" href="Contacto.php">| Contacto |</a> </a>
							<!-- Submenus -->
							
						</li> 
                        <li class="dropdown ">
							<a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown">| Sesión</a>
							<!-- Submenus -->
							<ul class="dropdown-menu">
                            	
								<li><a style="color: white;" href="salir.php">Cerrar Sesión</a></li>
							</ul>
						</li>    
      </div>
    </div>
  </nav>
			</div>
		</div>


<div>


	<h1>Usuarios</h1>
	<span>
	    
	
	</span>
	<button type="button" class="btn btn-dark" onclick="EliminarU()">Eliminar</button><span><?php include 'Modales/miModal.php'?>
	
	<table class="table table-hover" id="TablaU">
    <thead class="thead-dark">
      <tr>
      	<th></th>
      	<th>ID</th>
        <th>Usuario</th>
        <th>Cargo</th>
        <th>Contraseña</th>
      </tr>
			<?php  
            require_once("CRUD/class/Consultas.php");
            $usuarios = Usuarios::singleton();
            $data = $usuarios->get_Docentes();
            if (count($data)>0) {
              foreach ($data as $fila) {
                # code...
                $nom = $fila["nombre"];
                $con = $fila["password"];
                $id = $fila["id"];
                $priv = $fila["privilegio"];
                if ($priv == 1) {
                	# code...
                	echo '<tr id="'.$id.'">
                	<td><input name="opcionU" type="radio" value="'.$id.'"></td>
                	<td>'.$id.'</td>
      	<td>'.$nom.'</td>
      	<td>Docente</td>
      	<td>'.$con.'</td>
      	
      </tr>';
                }else if($priv == 2){
                	# code...
                	echo '<tr id="'.$id.'">
                	<td><input name="opcionU" type="radio" value="'.$id.'"></td>
                	<td>'.$id.'</td>
      	<td>'.$nom.'</td>
      	<td>Jefe de division</td>
      	<td>'.$con.'</td>
      </tr>';
                }else if($priv == 5){
                    echo '<tr id="'.$id.'">
                	<td><input name="opcionU" type="radio" value="'.$id.'"></td>
                	<td>'.$id.'</td>
      	<td>'.$nom.'</td>
      	<td>Administrador</td>
      	<td>'.$con.'</td>
      </tr>';
                }
                
              }
            }
          ?>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>


	<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					<!-- Widget 1 -->
					<div class="widget">
						<h4>Contactanos</h4>
						<!-- Social Media -->
						<div class="social">
							<img class="img-responsive" src="images/descarga (1).png" alt="" />
					
						</div>
					</div>
				</div>
				<div class="col-md-3">
				 <!-- widget 2 -->
				 <div class="widget">
					<h4>Contactos</h4>
					   <ul>
						  <li><i class="fa fa-angle-right"></i> <a href="#">Teléfono: 01 748-912-4450</a></li>
						  <li><i class="fa fa-angle-right"></i> <a href="#">Teléfono: 01 748-912-3489</a></li>
						  <li><i class="fa fa-angle-right"></i> <a href="#">Email: informes@itesa.edu.mx</a></li>
						  <li><i class="fa fa-angle-right"></i> <a href="#">Email: sugerencias@itesa.edu.mx</a></li>
						  <li><i class="fa fa-angle-right"></i> <a href="#">Fax: 01 748-912-4450 Ext. 106</a></li>
					   </ul>
				 </div>
			  </div>
			  <div class="col-md-3">
				 <!-- Widget 3 -->
				 <div class="widget">
					<h4>Localizacion y Atencion</h4>
					<ul>
					   <li><i class="fa fa-angle-right"></i> <a href="#"> Dirección: Carretera Apan-Tepeapulco Km 3.5, Colonia Las Peñitas, C.P. 43900, Apan Hidalgo, México</a></li>
					   <li><i class="fa fa-angle-right"></i> <a href="#">Horarios: 09:00 am-17:00 pm</a></li>
					</ul>
				 </div>
			  </div>
			 </div>
			 <div class="row col-md-12 col-sm-12">
			 	<div class="col-md-2 col-sm-2"></div>
			 	 <div class="col-md-9 col-sm-9" style="background-color: #3EBDC1;">
			  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3755.6198838654714!2d-98.46973568524793!3d19.72880103625494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1570918442964!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			  
		  </div>
		  <h3 class="col-md-12 col-sm-12">	Ubicacion del instituto</h3>
		</div>
		</footer>
		</html>
<script>
	

    function EliminarU() {


 		var act = $filaTU;
 		//document.getElementsByTagName("table")[0].setAttribute("id","tableid");
 		document.getElementById("TablaU").deleteRow(act);
 		$.get("recibeDatosElim.php?v1="+act, function(data){
              if (data == "ok")
                alert("Usuario Eliminado");
              else 
                alert("Error a eliminar usuario");
            });
	}
	

     $("#TablaU input[name='opcionU']").on("click",function(event) {
       $filaTU = $(this).val();
    });
    
    


</script>
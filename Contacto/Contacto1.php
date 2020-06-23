<?php  
require_once("valida2.php");
cookie();
?>﻿
﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Instrumentaciones Didácticas</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" href="css/settings.css" media="screen" />
		<!-- Pretty Photo -->
		<link href="../css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="../css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="../css/style.css" rel="stylesheet">
		<!-- Color Stylesheet - orange, blue, pink, brown, red or green-->
		<link href="../css/green.css" rel="stylesheet"> 
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="../img/favicon/favicon.png">
	</head>
	
	<body>
	    
	    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<script>
if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var comandos = {
    'validar': function() {
      window.location.href = "../Notificaciones.php";
    }
  };
  
  var comandos1 = {
    'inicio': function() {
      window.location.href = "../index3.php";
    }
  };
  
    var comandos2 = {
    'salir': function() {
      window.location.href = "index.php";
    }
  };

  // Add our commands to annyang
  	annyang.addCommands(comandos);
  	annyang.addCommands(comandos1);
  	annyang.addCommands(comandos2);
	annyang.setLanguage("es-MX");
  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}
</script>

		<!-- Header starts -->
		<header>
		   <div class="container">
			  <div class="row">
				 <div class="col-md-12 col-sm-12">
					<!-- Logo and site link -->
					<div class="logo">
					   <h1>Instrumentaciones Didacticas</h1>
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
							<a style="color: white;" href="#" ><a style="color: white;" href="../index3.php">Inicio |</a></a>
							
					
							<!-- Submenus -->
							
						</li>   
						
						  <li class="dropdown ">
							<a style="color: white;" href="" ><a style="color: white;" href="../Notificaciones.php">| Validaciones |</a> </a>
							<!-- Submenus -->
							
						</li> 
					
							<!-- Submenus -->
							
						</li> 
						<li class="dropdown ">
							<a style="color: white;" href="" ><a style="color: white;" href="#">| Contacto |</a> </a>
							<!-- Submenus -->
							
						</li> 
                        <li class="dropdown ">
							<a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown">| Sesión</a>
							<!-- Submenus -->
							<ul class="dropdown-menu">
                            	
								<li><a style="color: white;" href="../index.php">Cerrar Sesión</a></li>
							</ul>
						</li>    
      </div>
    </div>
  </nav>
			</div>
		</div>
		<!--/ Navigation Ends -->   
 <!--   /////////////////////////////////////////////////////////////////////////////////////////////////////////  --->
<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('../images/'excel.png);" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">¿Surgio algun problema?</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>




  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('../images/'excel.png);" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">Contactanos</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row block-12">
        <div class="col-md-6 pr-md-5">
          <form action="enviar.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" placeholder="Tu Nombre*" name="nombre" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" placeholder="Tu Email*" name="email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" placeholder="Telefono" name="telefono" >
            </div>
            <div class="form-group">
              <textarea  id="" cols="30" rows="7" class="form-control px-3 py-3" placeholder="Mensaje*" name="mensaje" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Enviar mensaje" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
       	 </div>
       	 <div class="col-md-4 col-sm-4 ">
        <img src="../images/foco-animacion.gif" alt="">
        
       	 </div>
    	</div>
	</div>
</div>
<!--  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!-- Content strats -->
		
		<!--/ Content ends --> 

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					<!-- Widget 1 -->
					<div class="widget">
						<!-- Social Media -->
						<div class="social">
							<img class="img-responsive" src="../images/descarga (1).png" alt="" />
					
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
		<!--/ Footer -->
	
		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 
			
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="../js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="../js/bootstrap.min.js"></script>
		<!-- Isotope, Pretty Photo JS -->
		<script src="../js/jquery.isotope.js"></script>
		<script src="../js/jquery.prettyPhoto.js"></script>
		<!-- Support Page Filter JS -->
		<script src="../js/filter.js"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script src="../js/jquery.themepunch.plugins.min.js"></script>
		<script src="../js/jquery.themepunch.revolution.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="../js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="../js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="../js/custom.js"></script>
		<script>
			// Revolution Slider
			var revapi;
			jQuery(document).ready(function() {
				   revapi = jQuery('.tp-banner').revolution(
					{
						delay: 9000,
						startwidth: 1200,
						startheight: 500,
						hideThumbs: 200,
						shadow: 3,
						navigationType: "none",
						hideThumbsOnMobile: "on",
						hideArrowsOnMobile: "on",
						hideThumbsUnderResoluition: 0,
						touchenabled: "on",
						fullWidth: "on"
					});
			});	
		</script>
	</body>	
</html>
<?php  
//VISTA DE USUARIO COM PRIVILEGIO DE DOCENTE
require_once("valida1.php");
cookie();


?>
<!DOCTYPE html>
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
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" href="css/settings.css" media="screen" />
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
	</head>
	
	<body>
<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<script>
if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var comandos = {
    'contacto': function() {
      window.location.href = "Contacto.php";
    }



  };
  var comandos1 = {
    'instrumento': function() {
      window.location.href = "guia_de_observacion.php";
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
							<a  href="" ><a style="color: white;" href="guia_de_observacion.php">| Instrumentos |</a> </a>
							<!-- Submenus -->
							
						</li>   						  
						
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
		<!--/ Navigation Ends -->   
 <!--   /////////////////////////////////////////////////////////////////////////////////////////////////////////  --->



<!--  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!-- Content strats -->
		<div class="content">
        
			<div class="container">
				
				<!-- Slider Starts -->
				<div class="tp-banner-container">
					<div class="tp-banner" >
						<ul>	<!-- SLIDE  -->
							<li data-transition="flyin" data-slotamount="4" data-masterspeed="300">
								<!-- MAIN IMAGE -->
								<img src="img/slider/documentos-que-debes-llevar-en-el-coche.png"  alt=""  data-bgposition="left top" data-duration="2000" data-bgfit="200" data-bgfitend="100" />
								<!-- LAYER NR. 1 -->
								
								<!-- LAYER NR. 1.1 -->
								<div class="tp-caption very_large_text customin customout heading"
									data-x="50"
									data-y="145"
									data-splitin="chars"
									data-elementdelay="0.05"
									data-start="1200"
									data-speed="1500"
									data-easing="Back.easeOut"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-splitout="lines"
									data-endelementdelay="0.1"
									data-customout="x:-230;y:-20;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
									data-endspeed="500"
									data-endeasing="Back.easeIn"
									data-captionhidden="on"
									style="z-index: 1">Evaluacion
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption very_large_text lfl paragraph"
									data-x="50" data-hoffset="0"
									data-y="225"
									data-speed="600"
									data-start="2000"
									data-easing="Circ.easeOut"
									data-endspeed="300"
									style="z-index: 1">por
								</div>
								<!-- LAYER NR. 3 -->
								<div class="tp-caption very_large_text lfl paragraph"
									data-x="50" data-hoffset="0"
									data-y="300"
									data-speed="600"
									data-start="2000"
									data-easing="Circ.easeOut"
									data-endspeed="300"
									style="z-index: 1">competencias
								</div>

							</li>
								<!-- SLIDE -->
							<li data-transition="cube" data-slotamount="6" data-masterspeed="300">
								<!-- MAIN IMAGE -->
								<img src="img/slider/imagen-documentos.jpg_447846472.jpg"  alt=""  data-bgposition="left center" data-duration="2000" data-bgfit="200" data-bgfitend="100" />
								<!-- LAYER NR. 1 -->
								<div class="tp-caption large_bold_white skewfromrightshort customout"
									data-x="100"
									data-y="70"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="800"
									data-start="1200"
									data-easing="Back.easeOut"
									data-endspeed="500"
									data-endeasing="Power4.easeIn"
									data-captionhidden="on"
									style="background-color: rgba(23, 22, 22, 0.2); z-index: 4" >Modelo
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption large_bold_white skewfromleftshort customout"
									data-x="350"
									data-y="80"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="800"
									data-start="1300"
									data-easing="Back.easeOut"
									data-endspeed="500"
									data-endeasing="Power4.easeIn"
									data-captionhidden="on"
									style="background-color: rgba(23, 22, 22, 0.2); z-index: 5">Educativo
								</div>
								<!-- LAYER NR. 3 -->
								<div class="tp-caption medium_light_white skewfromrightshort customout"
									data-x="100"
									data-y="195"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="600"
									data-start="1400"
									data-easing="Back.easeOut"
									data-endspeed="500"
									data-endeasing="Power4.easeIn"
									data-captionhidden="on"
									style="background-color: rgba(23, 22, 22, 0.2); z-index: 6">por
								</div>
								<!-- LAYER NR. 4 -->
								<div class="tp-caption large_bold_white skewfromleftshort customout"
									data-x="165"
									data-y="182"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="600"
									data-start="1500"
									data-easing="Back.easeOut"
									data-endspeed="500"
									data-endeasing="Power4.easeIn"
									data-captionhidden="on"
									style="background-color: rgba(23, 22, 22, 0.2); z-index: 7">Competencias
								</div>
								<!-- LAYER NR. 5 -->
								
							</li>
						</ul>
					</div>
				</div>
				<!--/ Slider End -->
				<!--   /////////////////////////////////////////////////////////////////////////////////////////////////////////  --->



				<!--  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
				
				<div class="bor"></div>

				<div class="main-content">
				  <div class="row">
					<div class="col-md-7">
					  <h2>Guias de observacion</h2>
					  <p class="main-meta" > <h5 align="justify">Documento que permite encausar la acción de observar ciertos fenómenos. Esta guía, por lo general, se estructura a través de columnas que favorecen la organización de los datos recogidos. El valor que tiene esa mencionada guía de observación hace que se haga uso de ella en múltiples sectores y por parte de un elevado número de personas. Así, por ejemplo, existe la referente al desarrollo de clases en un centro educativo concreto. En este caso, en ella se especificarán aspectos tales como la relación que se establece entre los alumnos y el docente o viceversa, el ambiente que existe en el aula, qué recursos son utilizados para el desarrollo de la materia, cómo reaccionan los estudiantes ante las propuestas del profesor, qué problemas surgen, etc. Puede ser utilizada por el docente para “analizarse” a sí mismo y a sus estudiantes.</h5></p>
					</div>
					<div class="col-md-5">
					  <div class="main-box">
						<img src="images/conclusion-introduction-starter-plenary7.jpg"  >
					  </div>
					</div>
				  </div>
				</div>
			
				<!-- CTA starts -->
				<div class="cta">
				   <div class="row">
					  <div class="col-md-12">
						 <!-- First line -->
						 <h3 align="center;">Objetivos del modelo por competencias</h3>
					  </div>
					 
					  </div>
				   </div>
				</div>
				<!--/ CTA Ends -->
				
				<!-- Features list. Note down the class name before editing. -->
						 <div class="row">
							<div class="col-md-3 col-sm-6">
							   <div class="afeature">
								  <div class="afmatter">
								  	<h3>Conocimientos</h3>
									 <p>Aumentar los conocimientos sobre la forma de tratar una situación de aprendizaje.</p>
								  </div>
							   </div>
							</div>
							<div class="col-md-3 col-sm-6">
							   <div class="afeature">
								  <div class="afmatter">
									 <h3>Habilidades</h3>
									 <p>Potenciar la habilidad del estudiante para relacionar datos y fuentes de información.</p>
								  </div>
							   </div>                        
							</div>
							<div class="col-md-3 col-sm-6">
							   <div class="afeature">
								  <div class="afmatter">
									 <h4>Comunicacion</h4>
									 <p>Enseñar a comunicarse sin ensayo y error.</p>
								  </div>
							   </div>                        
							</div>
							<div class="col-md-3 col-sm-6">
							   <div class="afeature">
								  <div class="afmatter">
									 <h6>Solucion a problemas</h6>
									 <p align="justify">Enseñar a verbalizar las dificultades con las que los alumnos se encuentran y las estrategias empleadas.
</p>
								  </div>
							   </div>                        
							</div>                
						 </div>
				
				<!-- Features ends -->

				<div class="bor"></div>

				<!-- Testimonials -->

				<div class="testimonial">
					<div class="container">
						<div class="cta">
				   <div class="row">
					  <div class="col-md-12">
						 <!-- First line -->
						 <h3>Caracteristicas de alumnos autosuficientes</h3>
					  </div>
					 
					  </div>
				   </div>
						 <div class="row">

							<div class="col-md-4 col-sm-4">
							   <!-- Testimonial #1 -->
							   <div class="test">
								 Curiosos de su entorno, su cultura y su historia. Interesados en las ciencias y la matemática detrás de los fenómenos. Participativos buscadores de la justicia y la democracia. 
							   </div>
							   <div class="test-arrow"></div>
							   <div class="tauth"><i class="fa fa-user"></i> Poseedores de conocimiento </div>
							</div>
							
							<div class="col-md-4 col-sm-4">
							   <!-- Testimonial #2 -->
							   <div class="test">Lidian con el conocimiento conflictivo. Crean muchas ideas en situaciones nuevas y ambiguas. Replantean, imaginan y ven problemas desde diferentes perspectivas.
							   </div>
							   <div class="test-arrow"></div>
							   <div class="tauth"><i class="fa fa-user"></i> Pensadores originales</div>
							</div>

							<div class="col-md-4 col-sm-4">
							   <!-- Testimonial #3 -->
							   <div class="test">Trabajan en equipo y brindan sus fortalezas. Buscadores de talentos que valoran la experiencia en otros.  Ciudadanos inquisitivos del mundo que buscan y respetan la diversidad y los distintos puntos de vista.
							   </div>
							   <div class="test-arrow"></div>
							   <div class="tauth"><i class="fa fa-user"></i> Colaboradores generosos que resuelven problemas</div>
							</div>                        
						 </div>
					  </div>
					</div>

					<div class="bor"></div>
				
				<!-- Recent post starts. Note down the class name before editing. -->
				
			
				
				<!-- Recent post ends -->            
				
				
				<!-- Clients starts -->
				   
				<div class="row">
				   <div class="col-md-12">
					  <div class="clients">
						 <img class="img-responsive" src="img/clients/1.png" alt="" />
						 <img class="img-responsive" src="img/clients/2.png" alt="" />
						 <img class="img-responsive" src="img/clients/3.png" alt="" />
						 <img class="img-responsive" src="img/clients/4.png" alt="" />
						 <img class="img-responsive" src="img/clients/5.png" alt="" />
						 <img class="img-responsive" src="img/clients/6.png" alt="" />
					  </div>
				   </div>
				</div>
				
				<!-- Clients ends -->           
				
			</div>
		</div>   
		<!--/ Content ends --> 

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
		<!--/ Footer -->
	
		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 
			
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Isotope, Pretty Photo JS -->
		<script src="js/jquery.isotope.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<!-- Support Page Filter JS -->
		<script src="js/filter.js"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script src="js/jquery.themepunch.plugins.min.js"></script>
		<script src="js/jquery.themepunch.revolution.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
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
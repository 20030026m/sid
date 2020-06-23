<!DOCTYPE html>
<html lang="en">
    <!--- Pagina principal del proyecto --->
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
		<link href="css/blue.css" rel="stylesheet"> 
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon/favicon.png">
        
        <link rel="stylesheet" href="js/plugins/select2/select2.css">
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
    'entrar': function() {
      window.location.href = "login.php";
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


<?php
	$_Tabla = "items";
	$_idTabla = "id";
	$_valor = "item";
	$_estado = "status";
	
	$titulo1 = "Item";
	$titulo2 = "Valor";		
	
	
	require("CRUD/class/Consultas.php");
		$obj = new Consultas();
	
	
	$items = $obj->get_Items();
?>

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
        <li><a style="color: white;" href="Contactar/Contacto1.php">Instrumentos de evaluación |</a></li>
                        <li class="dropdown ">
							<a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown">| Sesión</a>
							<!-- Submenus -->
							<ul class="dropdown-menu">
                            	
								<li><a style="color: white;" href="salir.php">Salir</a></li>
							</ul>
						</li>
                        </ul>    
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
		
				<div class="bor"></div>

				<div class="main-content">
				  <div class="row">
					<div class="col-md-10">
					  <h2>Instrumento de Evaluación</h2>
                        <div class="col-sm-12" style="margin-bottom:25px; margin-top:10px;">
                        <button type="button" class="btn btn-primary pull-right" id="bt_add_fila"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
                        </div>
                        
                        
                        <div class="panel panel-default" style="padding-top:15px; padding-right:10px; padding-left:10px;">	
                        	<div class="registros panel-body" id="lista-catalogo">
                            <!--<h2>Guias de observacion</h2>-->
                            <br>
                            <div class='text-center'>
                                <h4>Cargando...</h4>
                              <img src='img/loader.gif' style="margin-top:5px;" width='147' height='25' alt=''/>
                            </div>
                          </div> 
                        </div>
                    
					</div>
					<div class="col-md-2">
					  <div class="main-box">
						<img class=" img-fluid" src="images/conclusion-introduction-starter-plenary7.jpg"  >
					  </div>
					</div>
				  </div>
				</div>
			

				
				<!-- Features list. Note down the class name before editing. -->
						 <div class="row">
							<div class="col-md-3 col-sm-6">
							   <div class="afeature">
								  <div class="afmatter">
								  	<h5>Conocimientos</h5>
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
				<div class="col-md-3">
				 <!-- widget 2 -->
				 <div class="widget">
					<h4>Contactos</h4>
					   <ul>
						  <li><i class="fa fa-angle-right"></i> <a href="#">Teléfono: 01 748-912-4450</a></li>
						  <li><i class="fa fa-angle-right"></i> <a href="#">Teléfono: 01 748-912-3489</a></li>
						  <li><i class="fa fa-angle-right"></i> <a href="Contactarescuela/Contacto1.php">Email: informes@itesa.edu.mx</a></li>
						  <li><i class="fa fa-angle-right"></i> <a href="Contactarescuela1/Contacto1.php">Email: sugerencias@itesa.edu.mx</a></li>
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
              
			 <div class="col-md-6 col-sm-6">
			 	<h3 class="col-md-12 col-sm-12">	Ubicación del instituto</h3>
			  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3755.6198838654714!2d-98.46973568524793!3d19.72880103625494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1570918442964!5m2!1ses!2smx" width="100%" height="200" frameborder="0" style="border:0;" ></iframe>
		</div>              
              
			 </div>

        </div>
		</footer>		
		<!--/ Footer -->
	
    
    
    
<!-- modal-menus -->
<div class="modal fade" tabindex="-1" role="dialog" id="m_c_agrega">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregar: <?php echo $titulo1; ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      	<form class="form-horizontal">
        
        
        
        <div class="row">
        
        
        	<div class="form-group col-sm-12" id="_ncampo">
						
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="ncampo" name="ncampo">
                </div>
                    
            </div>
            
            
            
            <div class="form-group col-sm-12" id="_ncampo">
						

                <div class="col-sm-12">
                
                 <select id="campo" name="campo" style="width:100%">
                        <option></option>
                        <?php carga_combo($items, 'id', 'item'); ?>
                        
                    </select>
                    </div>
                    
            </div>
            
              <div class="form-group col-sm-12">
                <div class=" col-sm-12 text-right">
                    <button type="button" class="btn btn-success" id="bt_add"><i class="fa fa-upload" aria-hidden="true"></i> Agregar</button>
                </div>
              </div>            
          </div>  

        </form>
      </div>
    </div>
  </div>
</div><!-- /.modal -->   
<?php
	function carga_combo($catalogo, $id, $va)
	{
		if(count($catalogo)>0)
		{
			foreach($catalogo as $LIST)
			{
				$tk= $LIST[$id];
				$tv= $LIST[$va];
				echo "<option value='$tk'>$tv</option>";
			}
		}
	}
?>    

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
        
        <script src="js/plugins/select2/select2.min.js"></script>  
        
<script type="text/javascript">
	var t_catalogo;
	

	
	
	$("#bt_add_fila").click(function()
	{
		$("#ncampo").val("");
		$('#m_c_agrega').modal({ keyboard: false, backdrop:'static',});	
		setTimeout(function(){ $("#ncampo").focus(); }, 500);
	});
	
	$(document).ready(function() 
	{
		$.ajax(
		{
			async:true, type:"POST",
			url: "ajax/ListaCatalogoItems.php",
			data: "tabla=" + '<?php echo $_Tabla; ?>' + "&& idTabla=" + '<?php echo $_idTabla; ?>' + "&& Valor=" + '<?php echo $_valor; ?>' + "&& Estado=" + '<?php echo $_estado; ?>' + "&& Titulo1=" + '<?php echo $titulo1; ?>' + "&& Titulo2=" + '<?php echo $titulo2;?>',
				success: function(resu)
				{
					$("#lista-catalogo").html(resu);
					//t_catalogo = $('#t_catalogo').dataTable();					
				}
		});
		
		
		$("#campo").select2({
			placeholder: "Item Sugeridos",
			allowClear: true
		});
	});
	
	$("#campo").change(function() {
		var obj = document.getElementById("campo");
		txt = obj.options[obj.selectedIndex].text;
		$("#ncampo").val(txt);
	});
	

</script>        

        
	</body>	
</html>
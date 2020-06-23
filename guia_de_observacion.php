<?php  
// PAGINA PARA LA CREACION DEL INSTRUMENTO DE OBSERVACIÓN
require_once("valida1.php");
cookie();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Guia de Observacion</title>
		<!-- Description, Keywords and Author -->
    <script src="js/jquery.js"></script>
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
        
        
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Estiloss.css" rel="stylesheet"  />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<!-- Flex Slider CSS -->
		<link href="css/flexslider.css" rel="stylesheet">
		<!-- Pretty Photo -->
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style_2.css" rel="stylesheet">
		<!-- Color Stylesheet - orange, blue, pink, brown, red or green-->
		<link href="css/blue.css" rel="stylesheet"> 
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon/favicon.png">
    	<link rel="stylesheet"  href="css/caja.css">
    	<link rel="stylesheet"  href="css/estilo.css">
        
        

        
    </head>  

<body>
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<script>
e = jQuery.Event("keypress")
	// Indicamos la tecla que deseamos que se pulse de manera automatica
	e.which = 13

if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
    var comandoDocente = {
    'docente': function() {
        $('#docente').focus();
        $.getScript("js/script.js", function(){
        alert("Archivo cargado!");
}       );
      
    }
  };

  var comandoGrupo = {
    'grupo': function() {
      $('#inGrupo').focus();
     
    }
  };
  
  var comandoIn = {
    'integrantes': function() {
      $('#estudi').focus();
     
    }
  };
  
  var comandoTi = {
    'evaluacion': function() {
      $('#tiempito').focus();
     
    }
  };
  
  var comandoEv = {
    'evidencia': function() {
      $('#evid').focus();
     
    }
  };
  
  var comandoCom = {
    'competencia': function() {
      $('#comp').focus();
     
    }
  };
  
  var comandoSelect = {
    'programa': function() {
      $('#selectPrueba').focus().click();
        $("#selectPrueba").keypress(function(e){
           alert('Se selecciono la tecla '+	e.which)
	}).trigger(e)
       // $("#selectPrueba").dropdown();
      //$('#selectPrueba').focus();
      
      // $('#selectPrueba').trigger('13');
     // if( $('#selectPrueba').focus().click()==true;){
           //$('#selectPrueba').dropdown;
      //}
     
    }
  };
  
  var comandos = {
    'contacto': function() {
      window.location.href = "Contacto.php";
    }



  };
  var comandos1 = {
    'inicio': function() {
      window.location.href = "index2.php";
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
  annyang.addCommands(comandoSelect);
  annyang.addCommands(comandoDocente);
  annyang.addCommands(comandoGrupo);
  annyang.addCommands(comandoIn);
  annyang.addCommands(comandoTi);
  annyang.addCommands(comandoEv);
  annyang.addCommands(comandoCom)
	annyang.setLanguage("es-MX");
  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}
</script>
    
<!-- Header starts -->
<!--<input type="text" name="comida" id="pruebaR" value="" /> -->

<!-- Content strats -->

<div class="content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            
            <!-- Events starts -->
            
            <div class="events">
               <div class="row">
                  <div class="col-md-12">
                  
                   <!--row -->
                                     <div class="row">
  								<div class="col-md-6 azul" id="columna">
                                <div class="form-group">
                                            <label class="control-label col-md-3" for="select"><img src="img/logoO.png">
                                            </label>
                                            <div class="col-md-9" >                               
                                               <form action="miphp.php" method="POST" >
                                               	
                                                <p id="prueba1"></p>
                                                </form>
                                            </div>
                                          </div> 
                                
                                </div>

 								<div class="col-md-6 azul" id="columna"><h2><span class="color"  id="NombreTema"  value="NombreTema"> 	</div>
                                
   								
  
							</div><!--Fin row -->
                     <!-- Events Accordion Panel -->
                     
                     <div class="panel-group" id="accordion">
                        <!-- Each item should be enclosed inside the class "accordion-group". Note down the below markup. -->
                        
                        <!-- First Accordion -->
                        <!--**************************************************PHP*******************************************************************-->

<!-- ***********************************************fin   PHP****************************************************************-->                                
           
                       <div class="panel">
                         <div class="panel-heading">
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                              <!-- Title. -->
                             <h5 class="panel-title" style="background-color: #085B00;">Datos de guia de observacion</h5>
                             
                           </a>
                         </div>
                         <div id="collapseOne" class="panel-collapse collapse in">
                           <div class="panel-body">
                              <!-- Contenido                  -->
                               <div class="row">
                  <div class="col-md-6 azul" id="columna">
                                <!-- Select box -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="select"><h4>Programa Educativo:</h4></label>
                                            <div class="col-md-9" >                               
                                                <select class="form-control color" id="selectPrueba" style="width:320px; height: 50px">
                                                <option>&nbsp;</option>
                                                <option>Ingeniería en Sistemas Computacionales</option>
                                                <option>Ingenieria en Mecatronica</option>
                                                <option>Ingenieria en Electromecanica</option>
                                                <option>Ingenieria en  Industrias alimentarias</option>
                                                <option>Ingenieria en  Logistica</option>
                                                <option>Ingenieria en  Gestion Empresarial</option>
                                                <option>Licenciatura en  Administracion</option>
                                                <option>Ingenieria Civil</option>
                                                <option>Licenciatura en  Turismo</option>
                                                </select>  
                                            </div>
                                          </div> 
                                </div>
                             <!--row -->
                            <div class="row">
                  <div class="col-md-6 azul" id="columna">
                                <!-- Select box -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="select"><h4>Semestre:</h4></label>
                                            <div class="col-md-9" >                               
                                                <select class="form-control color" id="select" style=" width:120px; height: 40px">
                                                <option>&nbsp;</option>
                                                <option>Primero</option>
                                                <option>Segundo</option>
                                                <option>Tercero</option>
                                                <option>Cuarto</option>
                                                 <option>Quinto</option>
                                                  <option>Sexto</option>
                                                   <option>Septimo</option>
                                                    <option>Octavo</option>
                                                     <option>noveno</option>
                                                </select>  
                                            </div>
                                          </div> 
                                </div>
                              </div>
 								<div class="col-md-6 azul" id="columna"><h4>Nombre del Docente:&nbsp;<input type="text" size="30" maxlength="30" value="" name="ingtexto1" id="docente">
<script src="js/script.js"></script></h4></div>
   								<div class="col-md-3 azul" id="columna"><h4>Clave de grupo:<input type="text" size="9" maxlength="30" value="" name="ingtexto1" id="inGrupo"></h4></div>
  
							</div><!--Fin row -->
                            <!--row -->
                             <div class="row">
  								<div class="col-md-6 azul" id="columna"><h4>Nombre del (la) estudiante o Integrantes del equipo:<textarea  id="estudi" name="comentarios" rows="3" cols="50"></textarea></h4> </div>
 								<div class="col-md-6 azul" id="columna"><h4>Fecha de aplicacion:<span  class="color">&nbsp;&nbsp;22 de Agosto 2019</span></h4></div>
   								<div class="col-md-12 azul" id="columna"><h4>Tiempo de evaluacion:&nbsp;<input id="tiempito" type="text" size="10" maxlength="100" value="" name="ingtexto1"></h4></div>
  
							</div><!--Fin row -->
                            <!--row -->
                            
 								<!--Fin row -->
                            <!--row -->
                             <div class="row">
  								<div class="col-md-12 azul" id="columna"><h4>Evidencia:&nbsp;<input id="evid" type="text" size="40" maxlength="100" value="" name="ingtexto1"></h4> </div>
 								
   								
  
							</div><!--Fin row -->
                            <!--row -->
                             <div class="row">
  								<div class="col-md-12 azul" id="columna"><h3>Competencia:<br> <textarea id="comp" name="comentarios" rows="6" cols="80"></textarea></h3> </div>
 								
                            <!-- Fin Contenido                  -->
                           </div>
                         </div>
                       </div>
                       
                       <!-- Second Accordion -->
                 
                       <!-- Eight accordion -->
                       <div class="panel">
                         <div class="panel-heading">
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                             <h5 class="panel-title" id="miColor5" style="background-color: #085B00;">Instrucciones</h5>
                           </a>
                         </div>
                         <div id="collapseEight" class="panel-collapse collapse">
                           <div class="panel-body">
                           <table class="table table-hover" id="myTable">

                           
    <thead>
      <tr >
        <th></th>
        <th>       No.</th>
        <th>Instrucción</th>
        <td><?php include 'Modales/modal_PL.php';?></td>
      </tr>

    </thead>
    <tbody>
    </tbody>
  </table>
 

  
                           </div>
                         </div>
                       </div><!-- fin acoordeon -->
                       <!-- Nine accordion -->
                       <div class="panel">
                         <div class="panel-heading">
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                             <h5 class="panel-title" id="miColor4" style="background-color: #085B00;" >Evaluación</h5>
                           </a>
                         </div>
                         <div id="collapseNine" class="panel-collapse collapse">
                           <div class="panel-body">
                              
                             <h3>Evaluación</h3>
                              <table class="table table-hover" id="myTable2">
    <thead>
      <tr>
        <th></th>
        <th>No.</th>
        <th>Aspecto a observar</th>
        <th>Valor del indicador</th>
        <th>Indicador</th>
        <td><?php include 'Modales/modal_EE.php'; ?></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        
      </tr>
      </tr>
      <div class="col-md-3 azul" id="columna"><h4>Puntaje total:<span class="color">&nbsp;40 puntos</span></h4></div>
    </tbody>
  </table>
                           </div>
                         </div>
                       </div><!-- fin acoordeon -->
                       <!-- Ten accordion -->
                       <div class="panel">
                         <div class="panel-heading">
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                             <h5 class="panel-title" id="miColor5" style="background-color: #085B00;">Índicadores de alcance</h5>
                           </a>
                         </div>
                         <div id="collapseTen" class="panel-collapse collapse">
                           <div class="panel-body">
                              <h3>Evidencia de aprendizaje</h3><br><h4>Practica:&nbsp;40%</h4>
                              <table class="table table-hover" id="myTable3">
    <thead>
      <tr>
        
        <th>Índicadores de alcance</th>
        <th>Valoración númerica</th>
        <td><?php include 'Modales/modal_IA.php'; ?></td>
      </tr>
    </thead>
    <tbody>
      
      <tr>
      
      </tr>
    </tbody>
  </table>
  <h4>Instrumento de evaluación:&nbsp;</h4><h4>Guia de observación</h4>
                              <table class="table table-hover" id="myTable4">
    <thead>
      <tr>
        <th>Metodo de evaluación</th>
        <th>Validación</th>
        <td><?php include 'Modales/modal_IA_2.php'; ?></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        
      </tr>
      
    </tbody>
  </table>
                            
                              <!--Fin contenido -->
                           </div>
                         </div>
                       </div><!-- fin acoordeon -->
                       <!-- Twelve accordion -->
                       <div class="panel"  >
                         <div class="panel-heading"  >
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve"  >
                             <h5 class="panel-title" id="miColor1" style="background-color: #085B00;">Calendarización de Instrumentación</h5>
                           </a>
                         </div>
                         <div id="collapseTwelve" class="panel-collapse collapse" >
                           <div class="panel-body">
                            <h3>Entrega de instrumento</h3>
                               <table class="table table-hover" id="myTable5">
    <thead>
      <tr>
       
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nombre y firma del docente</td>
        <td>...</td>
        <td> </td>
      </tr>
      <tr>
        <td>Nombre y firma del alumno</td>
        <td>...</td>
        <td> </td>
      </tr>
      <tr>
        <td>Fecha de entrega</td>
        <td>...</td>
        <td> </td>
      </tr>
    </tbody>
  </table>
  <h3>Evaluación de instrumento</h3>
  <table class="table table-hover">
    <thead>
      <tr>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nombre y firma del docente</td>
        <td>...</td>
        <td> </td>
      </tr>
      <tr>
        <td>Nombre y firma del alumno</td>
        <td>...</td>
        <td></td>
        
      </tr>
      <tr>
        <td>Fecha de entrega</td>
        <td>...</td>
        <td> </td>
      </tr>
      
    </tbody>
  </table>
  
  
                          
                           </div>
                         </div>
                       </div><!-- fin acoordeon -->
                     </div>
                     
                  </div>
               </div>
            </div>
            
            
            <!-- Events ends -->
            
             <Form name="formu" method="post"Action="pagw.php">
            <input  class="btn btn-success btn-sm"type="submit" value=" Presione para generar PDF" >
             </Form> 
            
         </div>
      </div>
   </div>
</div>   

<!-- Content ends --> 

		
		
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
		<!-- Flex slider JS -->
		<script src="js/jquery.flexslider-min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
	</body>	
</html>
<!-- Modal -->

<!-- Trigger the modal with a button -->
<script>
  $cont=0;
  $cont2=0;//contador para id de radio button
  $contFila=0;
  $sumaIndic=0;//suma de minimos

 
//funcion para agregar filas
function mifuncion()
{
  if ($sumaIndic <= 21) {
    var table = document.getElementById("myTable2");
    {
      $cont+=1;
      $cont2+=1; //contador para id de radio button
      var row = table.insertRow($cont);
      row.setAttribute("id", "$cont");
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      var cell4 = row.insertCell(3);
      var cell5 = row.insertCell(4);
      var cell6 = row.insertCell(5);
      var cell7 = row.insertCell(6);
      var cell8 = row.insertCell(7);
      var indicadorv = document.getElementById("txtInd").value;
      var areaT = document.getElementById("tArea").value;
      var indVal = document.getElementById("txtVInd").value;
      cell1.innerHTML= '<input name="hola" type="radio" value='+$cont2+'>'
      cell2.innerHTML = $cont;
      cell3.innerHTML = areaT;
      cell4.innerHTML = indVal;
      cell5.innerHTML = indicadorv;
      cell6.innerHTML = '<button class="btn btn-success btn-sm" id="Guardarr'+$cont2+'" >Guardar</button>'
      
      $sumaIndic = $sumaIndic + parseInt(indVal);
      document.getElementById("tArea").value="";
      document.getElementById("txtVInd").value="";
    }
    }else{
    alert("Error:" + $sumaIndic);
  }
  //obtiene el valor del input para editar
   $("#myTable2 input[name='hola']").on("click",function(event) {
      $contFila = $(this).val();
    });

  $('#Guardarr'+$cont2+'').on("click", function(){
    $.get("recibedatos.php?v1="+areaT+ "&v2="+indVal+"&v3="+indicadorv,function(data){
      if(data=="ok"){
        alert("Tus datos han sido guardados");
      }else{
        alert("Error al guardar, intentelo de nuevo");
      }
    }); 
  });
}
 
  
//funcion para obtener el valor de las celdas
function datosModificar()
{
  var contadorMod = $contFila;
  var tabla1 = document.getElementById("myTable2");
  var dato1 = tabla1.rows[contadorMod].cells[2].innerHTML;
  var dato2 = tabla1.rows[contadorMod].cells[3].innerHTML;
  var dato3 = tabla1.rows[contadorMod].cells[4].innerHTML;
  document.getElementById("descIndica").value = dato1;
  document.getElementById("valorIndica").value = dato2;
  document.getElementById("indicadortxt").value = dato3;
  //$sumaIndic = $sumaIndic -  parseInt(dato2);
   $("#BotonModi").on("click", function(){
    $.get("modificardatos.php?m1="+descIndica+"&m2="+valorIndica+"&m3="+indicadortxt,function(data){
      if(data=="ok"){
        alert("Datos Modificados correctamente");
      }else{
        alert("No se han podigo guardar los datos correctamente");
      }
    }); 
  });

}

//funcion que modifica los datos de las filas
function modificar(){
  var act = $contFila ;
  var table = document.getElementById("myTable2");
  var a = document.getElementById("indicadortxt").value;
  var b = document.getElementById("valorIndica").value;
  var c = document.getElementById("descIndica").value;
  table.rows[act].cells[2].innerHTML = c;
  table.rows[act].cells[3].innerHTML = b;
  table.rows[act].cells[4].innerHTML = a;
  //$sumaIndic = $sumaIndic + parseInt(b);
}

function Eliminar() {

 var act = $contFila;
 //document.getElementsByTagName("table")[0].setAttribute("id","tableid");
 document.getElementById("myTable2").deleteRow(act);
}

</script>
</script>
 
     <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalC1">
      Agregar
    </button>
    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModalModi" onclick="datosModificar()">Editar</button>   
    <button class="btn btn-danger btn-sm" onclick="Eliminar()">Eliminar</button>                    
<!-- Modal -->
<div id="myModalC1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Estrategia de evaluación</h4>
      </div>
      <div class="modal-body">
          							
        
        <h4>Indicador: <span class="color"><p><input id="txtInd" value="M" required></p></span></h4>
        <h4>Descripción del índicador: <span class="color"><p><textarea id="tArea" style="width:100%; height:5em" required>
        
        </textarea></p></span></h4>
        <h4>Valor del indicador: <span class="color"><p><input id="txtVInd" required></p></span></h4>
        
       
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-default" onclick="mifuncion() " data-dismiss="modal">Guardar</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal2 -->
<div id="myModalModi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Estrategia de ev</h4>
      </div>
      <div class="modal-body">
                        
        
        <h4>Indicador: <span class="color"><p><input id="indicadortxt"></p></span></h4>
        <h4>Descripción del índicador: <span class="color"><p><textarea id="descIndica" style="width:100%; height:5em">
        
        </textarea></p></span></h4>
        <h4>Valor del indicador: <span class="color"><p><input id="valorIndica"></p></span></h4>
      </div>
      <div class="modal-footer">
        <button type="button" id="BotonModi" class="btn btn-default" onclick="modificar()" data-dismiss="modal">Guardar</button>
      </div>
    </div>

  </div>
</div>
            <!-- Fin modal -->
						<!-- Fin modal -->
<!-- Modal 3-->


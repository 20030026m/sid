<!-- Modal -->

<!-- Trigger the modal with a button -->
<script>

$cont = 0;

$con=1;
$Fila=0;

function myCreateFunctionA()
{
if ($con==1) 
{
  $con+=1;
  var table = document.getElementById("myTable");
    {
      var row = table.insertRow(1);
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      cell1.innerHTML = '<input type="radio" value="6" name="select">';
      cell2.innerHTML = '6.-';
      cell3.innerHTML = 'Realizar la sumatoria.';

    var row1 = table.insertRow(1);
    var cell4 = row1.insertCell(0);
    var cell5 = row1.insertCell(1);
    var cell6 = row1.insertCell(2);
    cell4.innerHTML = '<input type="radio" value="5" name="select">';
    cell5.innerHTML = '5.-';
    cell6.innerHTML = 'Para que el estudiante sea evaluado en los indicadores A, B, D,E, F deberá cumplir con los indicadores marcados con M (mínimos).';

      var row2 = table.insertRow(1);
      var cell7 = row2.insertCell(0);
      var cell8 = row2.insertCell(1);
      var cell9 = row2.insertCell(2);
      cell7.innerHTML = '<input type="radio" value="4" name="select">';
      cell8.innerHTML = '4.-';
      cell9.innerHTML = 'El puntaje máximo de la evaluación formativa es de 40 puntos.';

      var row3 = table.insertRow(1);
      var cell10 = row3.insertCell(0);
      var cell11 = row3.insertCell(1);
      var cell12 = row3.insertCell(2);
      cell10.innerHTML = '<input type="radio" value="3" name="select">';
      cell11.innerHTML = '3.-';
      cell12.innerHTML = 'Se llenará el apartado "Puntos totales" con los puntos que considere corresponden con la calidad del producto.';

      var row4 = table.insertRow(1);
      var cell13 = row4.insertCell(0);
      var cell14 = row4.insertCell(1);
      var cell15 = row4.insertCell(2);
      cell13.innerHTML = '<input type="radio" value="2" name="select">';
      cell14.innerHTML = '2.-';
      cell15.innerHTML = 'Se marca con una "X" si cumple o no con el criterio.';

      var row5 = table.insertRow(1);
      var cell16 = row5.insertCell(0);
      var cell17 = row5.insertCell(1);
      var cell18 = row5.insertCell(2);
      cell16.innerHTML = '<input type="radio" value="1" name="select">';
      cell17.innerHTML = '1.-';
      cell18.innerHTML = 'El docente llenará la lista de cotejo en función de la calidad del producto entregado por el (los) estudiante (es).';
  }
  //$("#boton").click(function(){
      //$Fila=($('input:radio[name=select]:checked').val());
      //alert($Fila);
    //});
  
  $("#myTable input[name='select']").on("click",function(event) {

      $Fila = $(this).val();
      
    });
}else{
  alert("Hola ya has generado las instrucciones.");
}
}

function datosModificarA()
{
  var contadorMod = $Fila;
  var tabla1 = document.getElementById("myTable");
  var dato1 = tabla1.rows[contadorMod].cells[2].innerHTML;
  document.getElementById("labo").value = dato1;
  //$sumaIndic = $sumaIndic -  parseInt(dato2);
}
function modificarA(){
  var act = $Fila ;
  var table = document.getElementById("myTable");
  var a = document.getElementById("labo").value;
  table.rows[act].cells[2].innerHTML = a;
  //$sumaIndic = $sumaIndic + parseInt(b);
}
function myDeleteFunctionA()
{
document.getElementById("myTable").deleteRow(0);
}
</script>
    <button type="button" class="btn btn-success btn-sm-2" onclick="datosModificarA()" data-toggle="modal" data-target="#myModalB1">
      Modificar
    </button> 
    <button  type="button" class="btn btn-success btn-sm-2" onclick="myCreateFunctionA()">
      Generar
    </button> 
                      
<!-- Modal -->
<div id="myModalB1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">s
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Instrucciones</h4>
       
      </div>
      <div class="modal-body">				
        
        <h4>Instruccion: <span class="color"><p><textarea id="labo" style="width:100%; height:5em"></textarea></p></span></h4>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="modificarA()" data-dismiss="modal">Guardar</button>
      </div>
    </div>

  </div>
</div>
						<!-- Fin modal -->
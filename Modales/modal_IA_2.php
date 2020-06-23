<!-- Modal -->

<!-- Trigger the modal with a button -->
<script>
function mifuncion4()
{

var table = document.getElementById("myTable4");
  {
  var row = table.insertRow(1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);

  var indica = document.getElementById("indAlc2").value;
  var valida = document.getElementById("valiD").value;

  cell1.innerHTML = indica;
  cell2.innerHTML = valida;
  

  }
}


</script>
 
     <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalD2">
      Agregar
    </button>                      
<!-- Modal -->
<div id="myModalD2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Índicadores de alcance</h4>
      </div>
      <div class="modal-body">
          							
        <h4>Competencia no alcanzada</h4>
        <h4>Metodo de evaluacion: <span class="color"><p><textarea id="indAlc2" style="width:100%; height:10em">
        
        </textarea></p></span></h4>
        <h4>Valoración númerica: <span class="color"><p><input id="valiD"></p></span></h4>
        
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="mifuncion4()">Guardar</button>
      </div>
    </div>

  </div>
</div>
						<!-- Fin modal -->
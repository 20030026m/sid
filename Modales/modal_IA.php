<!-- Modal -->

<!-- Trigger the modal with a button -->
<script>
function mifuncion3()
{

var table = document.getElementById("myTable3");
  {
  var row = table.insertRow(1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3= row.insertCell(2);

  var indica = document.getElementById("indAlc").value;
  var numeval = document.getElementById("valNum").value;

  cell1.innerHTML = indica;
  cell2.innerHTML = numeval;
  cell3.innerHTML = '<button onclick="modificar()">Editar</button><button onclick="Eliminador">Eliminar</button>';
  

  }
}


</script>
 
     <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalD1">
      Agregar
    </button>                      
<!-- Modal -->
<div id="myModalD1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Índicadores de alcance</h4>
      </div>
      <div class="modal-body">
          							
        <H4>Competencia alcanzada</H4>
        <h4>Índicadores de alcance: <span class="color"><p><textarea id="indAlc" style="width:100%; height:10em">
        
        </textarea></p></span></h4>
        <h4>Valoración númerica: <span class="color"><p><input id="valNum"></p></span></h4>
        
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="mifuncion3()">Guardar</button>
      </div>
    </div>

  </div>
</div>
						<!-- Fin modal -->
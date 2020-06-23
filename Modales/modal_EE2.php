      
    <button type="button" class="btn btn-success btn-sm"onclick="Modifica()" data-toggle="modal" data-target="#myModalModi">
      Modificar
    </button> 
                     
<!-- Modal -->
<div id="myModalModi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Estrategia de evaluación</h4>
      </div>
      <div class="modal-body">
          							
        
        <h4>Indicador: <span class="color"><p><input id="txtInd"></p></span></h4>
        <h4>Descripción del índicador: <span class="color"><p><textarea id="tArea" style="width:100%; height:5em">
        
        </textarea></p></span></h4>
        <h4>Valor del indicador: <span class="color"><p><input id="txtVInd"></p></span></h4>
        
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="mifuncion()">Guardar</button>
      </div>
    </div>

  </div>
</div>
						<!-- Fin modal -->
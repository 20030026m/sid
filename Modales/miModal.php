<script>
     function datosModificar3()
{ 
  var contadorMod = $filaTU;
  var tabla1 = document.getElementById("TablaU");
  var dato1 = tabla1.rows[contadorMod].cells[2].innerHTML;
  var dato2 = tabla1.rows[contadorMod].cells[3].innerHTML;
  var dato3 = tabla1.rows[contadorMod].cells[4].innerHTML;
  document.getElementById("txtUsu").value = dato1;
  if (dato2 == "Docente") {document.getElementById("txtCargo").value = "1";}else if(dato2 == "Jefe de division"){document.getElementById("txtCargo").value = "2";}
  document.getElementById("txtCon").value = dato3;

}

</script>
<script>
//funcion que modifica los datos de las filas
function modificar3(){
  var act = $filaTU ;
  var table = document.getElementById("TablaU");
  var a = document.getElementById("txtUsu").value;
  var b = document.getElementById("txtCargo").value;
  var c = document.getElementById("txtCon").value;
  table.rows[act].cells[2].innerHTML = a;
  if (b == "1") {table.rows[act].cells[3].innerHTML = "Docente";}else if(b == "2"){table.rows[act].cells[3].innerHTML = "Jefe de division";}
  table.rows[act].cells[4].innerHTML = c;
  $.get("recibeDatosModif.php?v1="+a+"&v2="+b+"&v3="+c+"&v4="+act, function(data){
              if (data == "ok")
                alert("Usuario Modificado");
              else 
                alert("Error al modificar usuario");
            });
}
</script>

<button type="button" class="btn btn-dark" data-toggle="modal" onclick="datosModificar3()" data-target="#ModalA1" >
      Modificar
</button> 
               
<!-- Modal -->
<div id="ModalA1" class="modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Estrategia de evaluación</h4>
      </div>
      <div class="modal-body">
        <h4>Usuario: <span class="color"><p><input id="txtUsu"></p></span></h4>
        <h4>Cargo: <span class="color"><p><input id="txtCargo"></p></span></h4>
        <h5>1.Docente 2. Jefe de division </h5>   
        <h4>Constraseña: <span class="color"><p><input id="txtCon"></p></span></h4> 
      </div>
      <div class="modal-footer">
        <form action="" method="">
          <button class="btn btn-default" onclick="modificar3()" data-dismiss="modal">Guardar</button>  
        </form>
        
      </div>
    </div>

  </div>
</div>
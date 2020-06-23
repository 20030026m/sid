<?php
	$tabla = $_POST['tabla'];
	$id = $_POST['idTabla'];
	$valor = $_POST['Valor'];
	$estado = $_POST['Estado'];
	$titulo1 = $_POST['Titulo1'];
	$titulo2 = $_POST['Titulo2'];
?>

 <table class="table" id="t_catalogo">
 	<thead>
    	<th> No.</th>
		<th><?php echo $titulo1; ?></th>
		<th><?php echo $titulo2; ?></th>
        <th>Indicador</th>
        <th>Si</th>
        <th>No</th>
        <th>Puntos</th>
        <th>Retr</th>
	</thead>
  <tbody>
  
  
  <tr>
  <td>1</td>
  <td>Respeta el Tiempo Establecido</td>
  <td>8</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  
  <tr>
  <td>2</td>
  <td>Respeta el Temario</td>
  <td>8</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  
  	<?php
//			require_once("../class/almacen.php");
//			$obj = new Almacen();
//	  		$filas = $obj->getFilas($tabla);
//			if($filas != 0)
//			{
//				
//				if(count($filas)>0)
//				{
//					foreach($filas as $datos)
//					{
//						$t_id = $datos[$id];
//						$t_va = mb_strtoupper($datos[$valor]);
//						//$t_va = $datos[$valor];
//						$t_es = $datos[$estado];
//						echo "<tr>";
//							echo "<td>$t_id</td>";
//							echo "<td>$t_va</td>";
//							echo "<td>";
//							if($t_es==1)
//								echo "<button type='button' class='e_activo btn btn-success btn-xs' alt='$t_id'><b><i class='fa fa-thumbs-o-up'></i></b></button>";
//							else
//								echo "<button type='button' class='e_inacti btn btn-danger btn-xs' alt='$t_id'><b><i class='fa fa-thumbs-o-down'></i></b></button>";
//							echo "</td>";
//							
//							echo "<td>";
//								if($t_es==1)
//									echo "<button type='button' class='c_edita btn btn-warning btn-xs' alt='$t_id' rel='$t_va'><b><i class='fa fa-pencil-square-o'></i></b></button>";
//								else
//									echo "<button type='button' disabled class='c_edita btn btn-warning btn-xs' alt='$t_id' rel='$t_va'><b><i class='fa fa-pencil-square-o'></i></b></button>";
//							echo "</td>";
//						echo "</tr>";
//					}
//				}
//			}
//			else
//				echo "<h2>:( Error de conexión</h2>";
		?>
  </tbody>
 </table>
 

<?php
	//clase para conectar a la base de datos
	class Consultas{
		private $conector;
		private $BaseDatos;
		private $Servidor;
		private $Usuario;
		private $Clave;
		
		//constructor
		function __construct(){
			$this->BaseDatos = "sid";
			$this->Servidor = "localhost"; $this->Usuario = "root"; $this->Clave = "";
		}
		
		function get_Usuario($usu, $contra){
			if($this->conectar()){
				$sql="SELECT * FROM usuarios WHERE nombre LIKE '$usu' AND contra LIKE '$contra'";
				$datos = array();
				if($rs = $this->conector->query($sql)){
					while($fila = $rs->fetch_assoc())
						$datos[] = $fila;
						
					return $datos;
				}else{
					return -1;	
				}
				
				$this->desconectar();
			}else{
				return -1;
			}
		}
		
		function get_Items(){
			if($this->conectar()){
				$sql="SELECT * FROM items;";
				$datos = array();
				if($rs = $this->conector->query($sql)){
					while($fila = $rs->fetch_assoc())
						$datos[] = $fila;
						
					return $datos;
				}else{
					return -1;	
				}
				
				$this->desconectar();
			}else{
				return -1;
			}
		}				

//		function getFPagoVeranoEstudiante($ida){
//			if($this->conectar()){
//				$sql="SELECT fecha_pago FROM v_grupos_verano WHERE gs_ID = $ida";
//				if($rs = $this->conector->query($sql)){
//					$fila = $rs->fetch_assoc();
//					return $fila['fecha_pago'];
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//
//		function getVeranoEstudiante($ida){
//			if($this->conectar()){
//				$sql="SELECT * FROM adeudos WHERE id_ade = $ida";
//				$datos = array();
//				if($rs = $this->conector->query($sql)){
//					while($fila = $rs->fetch_assoc())
//						$datos[] = $fila;
//						
//					return $datos;
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//
//		function getVeranosEstudiante($matricula){
//			if($this->conectar()){
//				$sql="SELECT * FROM adeudos WHERE id_roles = 1000 AND matricula = '$matricula' AND adeudo LIKE 'CURSO DE VERANO%'";
//				$datos = array();
//				if($rs = $this->conector->query($sql)){
//					while($fila = $rs->fetch_assoc())
//						$datos[] = $fila;
//						
//					return $datos;
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//
//		function getNombreEstudiante($matricula){
//			if($this->conectar()){
//				$sql="SELECT CONCAT(alu_Nombre,' ',alu_ApePaterno,' ',alu_ApeMaterno) as nombre_alumno FROM ce_alumnos WHERE alu_NumControl = '$matricula'";
//				if($rs = $this->conector->query($sql)){
//					$fila = $rs->fetch_assoc();
//					return $fila['nombre_alumno'];
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//
//		function getNombreCatedratico($cat_ID){
//			if($this->conectar()){
//				$sql="SELECT CONCAT(cat_Nombre,' ',cat_ApePat,' ',cat_ApeMat) as nombre_docente FROM ce_catedraticos WHERE cat_ID = $cat_ID";
//				if($rs = $this->conector->query($sql)){
//					$fila = $rs->fetch_assoc();
//					return $fila['nombre_docente'];
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//
//		function getNombreGrupo($gs_ID){
//			if($this->conectar()){
//				$sql="(SELECT gs_Nombre FROM v_grupos_verano WHERE gs_ID = $gs_ID)";
//				if($rs = $this->conector->query($sql)){
//					$fila = $rs->fetch_assoc();
//					return $fila['gs_Nombre'];
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//
//		function getNombreMateriaGrupo($gs_ID){
//			if($this->conectar()){
//				$sql="(SELECT ret_NomCompleto FROM v_grupos_verano WHERE gs_ID = $gs_ID)";
//				if($rs = $this->conector->query($sql)){
//					$fila = $rs->fetch_assoc();
//					return $fila['ret_NomCompleto'];
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//
//		function setMontoGrupo($gs_ID, $monto_final, $monto_alumno){
//			if($this->conectar()){
//				$alumnos = $this->getEstudiantesGrupo($gs_ID);
//				if(is_array($alumnos)){
//					if(count($alumnos) > 0){
//						$fecha = date('Y-m-d');
//						$txtCurso = 'CURSO DE VERANO '.$this->getNombreMateriaGrupo($gs_ID);
//						$txtGrupo = $this->getNombreGrupo($gs_ID);
//
//						$this->conector->autocommit(FALSE);
//						$nt = 0;
//						$cantidad = count($alumnos) + 1;
//
//						foreach ($alumnos as $alumno) {
//							$matricula = $alumno['matricula'];
//							$sql = "INSERT INTO adeudos(id_roles, matricula, adeudo, area, detalle, fecha, estado) VALUES(1000, '$matricula', '$txtCurso', '$txtGrupo', '$monto_alumno', '$fecha', 1);";
//							$nt += $this->conector->query($sql);
//						}
//
//						$sqlUp1 = "UPDATE v_grupos_verano SET monto_final = $monto_final, estatus = 3 WHERE gs_ID = $gs_ID";
//						$nt += $this->conector->query($sqlUp1);
//
//						if($nt == $cantidad){
//							$this->conector->autocommit(1);
//							return(1);
//						}else{
//							$this->conector->rollback();
//							return(0);
//						}
//					}else{
//						return 0;
//					}
//				}else{
//					return 0;
//				}
//				
//				//$this->desconectar();
//			}else{
//				return 0;
//			}
//		}
//
//
//		function getGruposVeranoParaMonto(){
//			if($this->conectar()){
//				$sql="SELECT * FROM v_grupos_verano WHERE id_periodo = (SELECT id_periodo_pago FROM periodos_pago WHERE status_periodo_pago = 1) AND estatus >= 2";
//				$datos = array();
//				if($rs = $this->conector->query($sql)){
//					while($fila = $rs->fetch_assoc())
//						$datos[] = $fila;
//						
//					return $datos;
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//		
//		function getEstudiantesGrupo($gs_ID){
//			if($this->conectar()){
//				$sql="SELECT * FROM v_detalle_grupo WHERE gs_ID = $gs_ID";
//				$datos = array();
//				if($rs = $this->conector->query($sql)){
//					while($fila = $rs->fetch_assoc())
//						$datos[] = $fila;
//						
//					return $datos;
//				}else{
//					return -1;	
//				}
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//
//		function addGrupoVerano($ret_ID, $gs_Nombre, $ret_NomCorto, $ret_NomCompleto, $pe, $cat_ID, $horas, $fpago){
//			if($this->conectar()){
//				//$sql="INSERT INTO v_grupos_verano(ret_ID, gs_Nombre, ret_NomCorto, ret_NomCompleto, pe, cat_ID, horas, fecha_pago, id_periodo) VALUES($ret_ID, '$gs_Nombre', '$ret_NomCorto', '$ret_NomCompleto', $pe, $cat_ID, $horas, '$fpago', (SELECT id_periodo_pago FROM periodos_pago WHERE status_periodo_pago = 1))";
//				//if($this->conector->query($sql)){
//					//return 1;
//				//}else{
//					//return -1;	
//				//}
//				//$this->desconectar();
//				$all_query_ok=true;
//				$e=$this->existeGrupo($ret_ID, $gs_Nombre, $pe);
//				$e=$e+1;	
//				$this->conector->autocommit(FALSE);
//						
//				$this->conector->query("INSERT INTO v_grupos_verano(ret_ID, gs_Nombre, ret_NomCorto, ret_NomCompleto, pe, cat_ID, horas, fecha_pago, id_periodo) VALUES($ret_ID, '$gs_Nombre$e', '$ret_NomCorto', '$ret_NomCompleto', $pe, $cat_ID, $horas, '$fpago', (SELECT id_periodo_pago FROM periodos_pago WHERE status_periodo_pago = 1));") ? null : $all_query_ok=false;			
//				
//				if($all_query_ok)
//				{
//					$this->conector->autocommit(1);
//					return(1);
//				}
//				else
//				{
//					$this->conector->rollback();
//					return(-1);
//				}
//				$this->desconectar();				
//				
//				
//			}else{
//				return -1;
//			}
//		}
//
//		function upEstatusGrupo($gs_ID, $estado){
//			if($this->conectar()){
//				$sql="UPDATE v_grupos_verano SET estatus = $estado WHERE gs_ID = $gs_ID";
//				if($this->conector->query($sql)){
//					return 1;
//				}else{
//					return -1;	
//				}
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//
//		function getConteoInscritosGrupo($gs_ID){
//			if($this->conectar()){
//				$sql="SELECT COUNT(*) as total FROM v_detalle_grupo WHERE gs_ID = $gs_ID";
//				if($rs = $this->conector->query($sql)){
//					$fila = $rs->fetch_assoc();
//					return $fila['total'];
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//
//		function getGruposVerano(){
//			if($this->conectar()){
//				$sql="SELECT * FROM v_grupos_verano WHERE id_periodo = (SELECT id_periodo_pago FROM periodos_pago WHERE status_periodo_pago = 1) AND estatus != 0";
//				$datos = array();
//				if($rs = $this->conector->query($sql)){
//					while($fila = $rs->fetch_assoc())
//						$datos[] = $fila;
//						
//					return $datos;
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//		
//		//chuchin 
//		function getAlumnos($dato){
//			if($this->conectar()){
//				$sql="SELECT alu_NumControl, CONCAT(alu_NumControl , ' ' , alu_Nombre , ' ' , alu_ApePaterno , ' ' , alu_ApeMaterno ) AS text FROM alumnos WHERE CONCAT(alu_Nombre , ' ' , alu_ApePaterno , ' ' , alu_ApeMaterno) LIKE '%$dato%';";
//				$datos = array();
//				if($rs = $this->conector->query($sql)){
//					while($fila = $rs->fetch_assoc())
//						$datos[] = $fila;
//						
//					return $datos;
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//		
//		function addAluGrupo($g_mat, $gs_ID){
//			if($this->conectar()){
//			$sql="INSERT INTO `v_detalle_grupo` (`id_detalle_grupo`, `gs_ID`, `matricula`, `calificacion`, `estatus`) VALUES (NULL, '$gs_ID', '$g_mat', '0', '0');";
//				if($this->conector->query($sql)){
//					return 1;
//				}else{
//					return -1;	
//				}
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//		
//		function existeAluGrupo($g_mat, $gs_ID){
//			if($this->conectar()){
//				$sql="(SELECT id_detalle_grupo FROM v_detalle_grupo WHERE gs_ID = $gs_ID AND matricula = $g_mat)";
//				if($rs = $this->conector->query($sql)){
//					$fila = $rs->fetch_assoc();
//					return $fila['id_detalle_grupo'];
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}	
//		
//		function existeAluGrupoEmp($g_mat){
//			if($this->conectar()){
//				$sql="SELECT id_detalle_grupo FROM v_detalle_grupo inner join v_grupos_verano on v_detalle_grupo.gs_ID=v_grupos_verano.gs_ID WHERE v_grupos_verano.pe=1 AND v_detalle_grupo.matricula='$g_mat' AND v_detalle_grupo.estatus=0 AND v_grupos_verano.id_periodo = (SELECT id_periodo_pago FROM periodos_pago WHERE status_periodo_pago = 1);";
//				if($rs = $this->conector->query($sql)){
//					$fila = $rs->fetch_assoc();
//					return $fila['id_detalle_grupo'];
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}
//		
//		function getPe($gs_ID){
//			if($this->conectar()){
//				$sql="SELECT pe FROM v_grupos_verano WHERE gs_ID = $gs_ID;";
//				if($rs = $this->conector->query($sql)){
//					$fila = $rs->fetch_assoc();
//					return $fila['pe'];
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}	
//				
//		function delAluGrupo($gd_ID){
//			if($this->conectar()){
//				$sql="DELETE FROM v_detalle_grupo WHERE id_detalle_grupo = $gd_ID;";
//					if($this->conector->query($sql)){
//						return 1;
//					}else{
//						return -1;	
//					}
//					$this->desconectar();
//				}else{
//					return -1;
//			}
//		}	
//		
//		function existeGrupo($ret_ID, $ret_Clave, $pe){
//			if($this->conectar()){
//				$sql="(SELECT count(gs_ID) as total FROM v_grupos_verano WHERE ret_ID = $ret_ID AND gs_Nombre LIKE '$ret_Clave%' AND pe=$pe);";
//				if($rs = $this->conector->query($sql)){
//					$fila = $rs->fetch_assoc();
//					return $fila['total'];
//				}else{
//					return -1;	
//				}
//				
//				$this->desconectar();
//			}else{
//				return -1;
//			}
//		}				
//		//chuchin 
		 					
		//verifica acceso a la base de datos
		function conectar(){
			$this->conector = new mysqli($this->Servidor,$this->Usuario,$this->Clave,$this->BaseDatos);
			if ($this->conector->connect_errno) 
				return 0;	
			else{
				$this->conector->set_charset('utf8');
				return 1;
			}
		}
		
		//cierra conexion
		function desconectar(){
			$this->conector->close();
		}
	}
?>
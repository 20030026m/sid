<?php  
//VALIDA LA SESION Y CREA UNA COOKIE YA SEA EN 'index2' o 'index3'
$segundo = 60*60*24*365+time();
//$segundo+ time();
$numer=time();
setcookie('cook', $numer, $segundo);


session_start();
$sesion = $_SESSION['username'];
$sesionP = $_SESSION['privi'];
if(!isset($sesion)){
    header("location: index.php");
}else{
    if($sesionP != 1){header("location: index.php");}
}


	function cookie(){
		
		if (!isset($_COOKIE["cook"])) {
			
		}else {
			$tiem=$_COOKIE["cook"];

			$tiempoactual = time();
			$timepotrascurrido = $tiempoactual-$tiem;
			//echo $timepotrascurrido;
			
            if($tiempotranscurrido>60){
                
                session_destroy();
            
                
            }else{
                
			unset($_COOKIE["cook"]);
			$segundo = 60*60*24*365+time();
			$segundo+ time();	
			$numer=time();
			setcookie("cook", $numer, $segundo);
            }
		}
		

	}

?>
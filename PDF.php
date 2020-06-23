<?php
// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// Introducimos HTML de prueba



 $html=file_get_contents_curl("https://instrumentaciones.000webhostapp.com/public_html/pagw.php");

 
// Instanciamos un objeto de la clase DOMPDF.
$pdf = new DOMPDF();
 
// Definimos el tamaño y orientación del papel que queremos.
$pdf->set_paper("A3", "portrait");
//$pdf->set_paper(array(0,0,104,250));
 
// Cargamos el contenido HTML.
$pdf->load_html($html);
 
// Renderizamos el documento PDF.
$pdf->render();
 
// Enviamos el fichero PDF al navegador.
$pdf->stream('guiadeobservacion.pdf');


function file_get_contents_curl($url) {
	$crl = curl_init();
	$timeout = 5;
	curl_setopt($crl, CURLOPT_URL, $url);
	curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
	$ret = curl_exec($crl);
	curl_close($crl);
	return $ret;
}

// Guardamos el contenido de contenido.php en la variable html
// ob_start();
// require "pagw.php";
// $html = ob_get_clean();
// // Jalamos las librerias de dompdf
// require_once 'dompdf/autoload.inc.php';
// use Dompdf\Dompdf;
// // Inicializamos dompdf
// $dompdf = new Dompdf();
// // Le pasamos el html a dompdf
// $dompdf->loadHtml($html);
// // Colocamos als propiedades de la hoja
// $dompdf->setPaper("A4", "landscape");
// // Escribimos el html en el PDF
// $dompdf->render();
// // Ponemos el PDF en el browser
// $dompdf->stream();

?>

<?php
    require('../app/lib/vendor/autoload.php'); 

    require_once ('../plantillas/plantilla-ventas.php');

    require_once ('ventas.php');
    
    $css= file_get_contents('../css/estilos.css');
    $mpdf = new \Mpdf\Mpdf();

    $plantilla = getPlantilla($listadoVentas);
    $mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);
    $mpdf->WriteHTML($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);

    $mpdf->Output('informeVentasPdf', 'I');
?>